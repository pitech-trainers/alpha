<?php

namespace Bookshop\BookshopBundle\Faker\Provider;

class CategoryProvider extends \Faker\Provider\Base {

    protected static $labels = array("Arta", "Beletristica","Dictionare","Medicina","Economie","Psihologie","Stiinta si Tehnica","Manuale Scolare","Limbi Straine","Istorie");
  

 public function label() {
      
        return static::randomElement(static::$labels);
    }

}