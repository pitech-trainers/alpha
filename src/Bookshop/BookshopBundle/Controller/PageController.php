<?php

namespace Bookshop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
    var_dump($this->getUser());
//    die;
    return $this->render('BookshopBookshopBundle:Page:index.html.twig');
    }
}
