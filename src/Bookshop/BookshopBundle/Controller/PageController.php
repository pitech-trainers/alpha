<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {




        $em = $this->getDoctrine()
                   ->getManager();

        $products = $em->getRepository('BookshopBookshopBundle:Product')
                    ->getLatestProducts(6);
//        var_dump($products[0]->getCategory()->getLabel());
        
    return $this->render('BookshopBookshopBundle:Page:index.html.twig', array(
            'products' => $products
        ));
    }
}
