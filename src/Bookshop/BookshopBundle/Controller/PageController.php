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
    
    public function productListAction()
    {      
        $request = $this->get('request');  
        
        $em = $this->getDoctrine()
                   ->getManager();
        $products = $em->getRepository('BookshopBookshopBundle:Product')->getFilteredProducts(
                                                                                    $request->query->get('cid'),
                                                                                    $request->query->get('price'),
                                                                                    $request->query->get('stock'),
                                                                                    $request->query->get('sortBy'),
                                                                                    $request->query->get('direction'),
                                                                                    $request->query->get('search')
                                                                                              );     
        $categories = $em->getRepository('BookshopBookshopBundle:Category')->findAll();        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                            $products,
                            $this->get('request')->query->get('page', 1)/*page number*/,
                            3/*limit per page*/
                                  );
        if (!is_null($request->query->get('label'))){
          $label=$request->query->get('label');
        }
        else {
        $label='Search result for '.$request->query->get('search');
        }
        
        return $this->render('BookshopBookshopBundle:Page:categoryPage.html.twig', array(
                'pagination' => $pagination , 'label' => $label ,'categories' => $categories

        ));
    }
    
}
