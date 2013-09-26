<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
       
    return $this->render('BookshopBookshopBundle:Page:index.html.twig');
    }
}
