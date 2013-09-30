<?php

namespace Bookshop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAware;



class DataLoader  extends ContainerAware implements FixtureInterface
{
//    protected static $path = "/home/forban/Sites/alpha/src/Bookshop/BookshopBundle/Resources/config/Fixtures/Data.yml";
   
    public function load(ObjectManager $manager)
    {
        $loader = new \Nelmio\Alice\Loader\Yaml();
        $faker = new \Faker\Generator();
        $fakerProvider = new \Bookshop\BookshopBundle\Faker\Provider\DataProvider($faker);
        $faker->addProvider($fakerProvider);
        $finder = $this->container->get("finder");
        $finder->files()->name('Data.yml')->in('src/Bookshop/BookshopBundle/Resources');     

        foreach ($finder as $file) {
            $path = $file->getRealpath();
        }

        Fixtures::load($path, $manager, array('providers' => array($fakerProvider)));
              
    }
}