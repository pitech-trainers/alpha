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
        $items=null;
        if(isset($_SESSION['cart'])){
            $cart=$_SESSION['cart'];
            $items=$cart->getCartItems();
        }
        $em->getRepository(('BookshopBookshopBundle:Cart'))->createCart($user,$em,$items);
    }

}