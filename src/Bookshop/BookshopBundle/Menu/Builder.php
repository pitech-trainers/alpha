<?php

namespace Bookshop\BookshopBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function headerMenuGuest(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('My cart', array('route' => 'bookshop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'bookshop_bookshop_homepage'));
        $menu->addChild('Log in', array('route' => 'bookshop_bookshop_homepage'));
        
        return $menu;
    }
    
     public function headerMenuUser(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');   
        $menu->addChild('My cart', array('route' => 'bookshop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'bookshop_bookshop_homepage'));
        $menu->addChild('My account', array('route' => 'bookshop_bookshop_homepage'));
        $menu->addChild('Log out', array('route' => 'bookshop_bookshop_homepage'));
        
        return $menu;
    }
    
    public function categoryMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('id', 'nav');
        $em = $this->container->get('doctrine')
                   ->getManager();

        $categories = $em->getRepository('BookshopBookshopBundle:Category')
                    ->findAll();
        
        foreach ($categories as $category)
        {
            $menu->addChild($category->getLabel(), array('route' => 'bookshop_bookshop_homepage'));
        }
        
        return $menu;
    }
}