<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bookshop\BookshopBundle\Entity\CartItem;

class CartItemController extends Controller
{
    public function newItem($productId,$price=null,$title=null,$cart=null,$quantity=1)
    {
        $cartItem=new CartItem();
        $cartItem->setPrice($price);
        $cartItem->setTitle($title);
        $cartItem->setQuantity($quantity);
        $cartItem->setCart($cart);
        $cartItem->setProductId($productId);
        return $cartItem;
    }
    
}   