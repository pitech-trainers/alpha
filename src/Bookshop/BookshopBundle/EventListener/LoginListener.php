<?php

namespace Bookshop\BookshopBundle\EventListener;

use Bookshop\BookshopBundle\Entity\Cart;
use Bookshop\BookshopBundle\Entity\CartItem;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

class LoginListener {

    protected $doctrine;

    public function __construct(Doctrine $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function onLogin(InteractiveLoginEvent $event) {
        $em = $this->doctrine
                ->getManager();
        $user = $event->getAuthenticationToken()->getUser();
        $cart = new Cart();
        $cart->setDate('2000-01-01');
        $cart->setActive(1);
        $cart->setTotal(0);
        $cart->setUserId($user);
        $em->persist($cart);
        $old = $em->getRepository('BookshopBookshopBundle:Cart')->getCartForUser($user);
        foreach ($old as $cart) {
            $cart->setActive(0);
        }

        $em->flush();
      
    }

}