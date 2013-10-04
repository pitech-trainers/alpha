<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bookshop\BookshopBundle\Controller\CartItemController;

class CartController extends Controller {

    public function cartPageAction() {
        $em = $this->getDoctrine()
                ->getManager();
        $cart = $em->getRepository('BookshopBookshopBundle:Cart')->getCartForUser($this->getUser());
        $cart = $cart[0];
        return $this->render('BookshopBookshopBundle:Page:cart.html.twig', array('cart' => $cart));
    }

    public function addAction() {
        $em = $this->getDoctrine()->getManager();
        $cart = $this->init($em);
        $cartItemController = new CartItemController();
        $cartItem = $cartItemController->newItem($_POST['id'], $_POST['price'], $_POST['title'], $cart);
        if (!$this->updateAction($_POST['quantity'])) {
            $cart->addCartItem($cartItem);
        }

        $em->flush();
        return $this->redirect($this->getRequest()->headers->get("referer"));
    }

    public function removeAction() {
        $em = $this->getDoctrine()->getManager();
        $cart = $this->init($em);

        foreach ($cart->getCartItems() as $item) {

            if (isset($_POST['clear']) || $item->getId() == $_POST['id']) {
                $cart->removeCartItem($item);
                $item->setCart(null);
                $em->flush();
                return $this->redirect($this->getRequest()->headers->get("referer"));
            }
        }

        return $this->redirect($this->getRequest()->headers->get("referer"));
    }

    public function updateAction($add = false) {
        $i = 0;
        $em = $this->getDoctrine()->getManager();
        $cart = $this->init($em);

        foreach ($cart->getCartItems() as $item) {
            $quantity = $_POST['quantity'][$i];
            $i++;
            if ($item->getProductId() == $_POST['id']) {


                if ($add != false) {
                    $quantity+=$add;
                }
                $item->setQuantity($quantity);
                return true;
            }
        }
    }

    protected function init($em) {

        $cart = $em->getRepository('BookshopBookshopBundle:Cart')->getCartForUser($this->getUser());
        $cart = $cart[0];

        if (isset($_POST['id'])) {
            return $cart;
        }
    }

}