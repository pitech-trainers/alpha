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
    return $this->render('BookshopBookshopBundle:Page:index.html.twig', array(
            'products' => $products
        ));
    }
    
    public function categoryPageAction($cid)
    {
        $em = $this->getDoctrine()
                   ->getManager();
        
        $category = $em->getRepository('BookshopBookshopBundle:Category')->find($cid);
        $products = $category->getProducts();
        
    return $this->render('BookshopBookshopBundle:Page:categoryPage.html.twig', array(
            'products' => $products
        ));
    }
    
}
