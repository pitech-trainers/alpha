<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        $request = Request::createFromGlobals();             
        $em = $this->getDoctrine()
                   ->getManager();
        $products = $em->getRepository('BookshopBookshopBundle:Product')->getFilteredProducts(
                                                                                    $cid,
                                                                                    $request->query->get('price'),
                                                                                    $request->query->get('stock'),
                                                                                    $request->query->get('sortBy'),
                                                                                    $request->query->get('direction')
                                                                                              );        
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
                            $products,
                            $this->get('request')->query->get('page', 1)/*page number*/,
                            3/*limit per page*/
                                  );
        
        $label=$em->getRepository('BookshopBookshopBundle:Category')->find($cid)->getLabel();
        
        return $this->render('BookshopBookshopBundle:Page:categoryPage.html.twig', array(
                'pagination' => $pagination , 'label' => $label

        ));
    }
    
}
