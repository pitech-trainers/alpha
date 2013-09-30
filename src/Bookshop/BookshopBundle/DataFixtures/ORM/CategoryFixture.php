<?php

namespace Bookshop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;

class CategoryLoader implements FixtureInterface
{
    protected static $path = "/home/forban/Sites/alpha/src/Bookshop/BookshopBundle/Resources/config/Fixtures/Category.yml";
   
    public function load(ObjectManager $manager)
    {
        $loader = new \Nelmio\Alice\Loader\Yaml();
        $faker = new \Faker\Generator();
        $fakerProvider = new \Bookshop\BookshopBundle\Faker\Provider\CategoryProvider($faker);
        $faker->addProvider($fakerProvider);
        Fixtures::load(static::$path, $manager, array('providers' => array($fakerProvider)));
              
    }
}




