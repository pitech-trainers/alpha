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
        $sort=[];
        $request = Request::createFromGlobals();
        
        if (!is_null($request->query->get('sortBy'))){
           $param=$request->query->get('sortBy');
           $dir=$request->query->get('direction');
           $sort=array($param => $dir); 
        }
        
        $em = $this->getDoctrine()
                   ->getManager();
        
        $products = $em->getRepository('BookshopBookshopBundle:Product')->findBy(array('category' => $cid), $sort);        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                            $products,
                            $this->get('request')->query->get('page', 1)/*page number*/,
                            3/*limit per page*/
                                  );
        var_dump($pagination);
         return $this->render('BookshopBookshopBundle:Page:categoryPage.html.twig', array(
                'pagination' => $pagination
        ));
    }
    
}
