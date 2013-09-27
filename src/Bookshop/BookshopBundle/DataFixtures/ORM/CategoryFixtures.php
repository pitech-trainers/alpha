<?php
namespace Bookshop\BookshopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bookshop\BookshopBundle\Entity\Category;

class CategoryFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cat = new Category();
        $cat->setLabel('Arta');
        $manager->persist($cat);
        
        $cat1 = new Category();
        $cat1->setLabel('Beletristica');
        $manager->persist($cat1);
        
        $cat2 = new Category();
        $cat2->setLabel('Dictionare');
        $manager->persist($cat2);
       
        $cat3 = new Category();
        $cat3->setLabel('Medicina');
        $manager->persist($cat3);
        
        $cat4 = new Category();
        $cat4->setLabel('Economie');
        $manager->persist($cat4);
        
        $cat5 = new Category();
        $cat5->setLabel('Psihologie');
        $manager->persist($cat5);
        
        $cat6 = new Category();
        $cat6->setLabel('Stiinta si Tehnica');
        $manager->persist($cat6);
        
        $cat9 = new Category();
        $cat9->setLabel('Manuale Scolare');
        $manager->persist($cat9);
        
        $cat7 = new Category();
        $cat7->setLabel('Limbi Straine');
        $manager->persist($cat7);
        
        $cat8 = new Category();
        $cat8->setLabel('Istorie');
        $manager->persist($cat8);
        
        $manager->flush();
           
    }

}