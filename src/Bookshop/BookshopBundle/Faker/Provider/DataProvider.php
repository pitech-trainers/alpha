<?php

namespace Bookshop\BookshopBundle\Faker\Provider;

class DataProvider extends \Faker\Provider\Base {

    protected static $titles =  
         array(
        "Mica metoda de pian", 
        "Album decorativ floral",
        "COMORILE MUZEELOR RUSE", 
        "Por una cabeza. Tango.", 
        "Practica bazelor de date",
        "Salate de sarbatoare", 
        "Jurnalul unui Jurnal",
        "Bonifacia", "PROFESORUL",
        "Mama si copilul. Editia a VI-a", 
        "Fundamentele auditului",
        "Chestiunea evreiasca", 
        "Iubeste revolutia", 
        "Ionia - Orase antice in Asia Mica"
         );
    
    protected static $years = array(1992, 2001, 1990, 1824, 1999, 2011, 2013, 1889, 1939,
        1920, 1900, 1911, 1944, 2000, 1920, 1923, 1989, 2004, 1988);
    
    protected static $description = 
         array("This is a description", 
        "This is another description", 
        "This is 3rd description"
         )
            ;
    protected static $sdescription =
         array("This is a descrp", 
         "This is another", 
         "This is 3rd"
         );
    
    protected static $labels = 
         array("Arta", 
         "Beletristica",
         "Dictionare",
         "Medicina",
         "Economie",
         "Psihologie",
         "Stiinta si Tehnica",
         "Manuale Scolare",
         "Limbi Straine",
         "Istorie"
          );
    
    protected static $authors = 
         array("Maria Cernovodeanu",
         "Elena Stanescu-Batrinescu",
         "Carlos Gardel",
         "Roger Bloar",
         "Scott Joplin",
         "Ion Pirnog",
         "Paul Goma",
         "Ada Milea",
         "Ram Chara",
         "Roman Vlaicu");
    
    protected static $filenames = 
        array (
        "mica-metoda-pian.jpg",
        "album-decorativ-floral.jpg",
        "practica-bazelor-date.jpg",
        "secretele-fotografiei-digitale.jpg",
        "jurnalul-unui-jurnal.jpg",
        "alexandru-lapusneanul-constantin.jpg",
        "dictionar-medical-buzunar-70583.jpg",
        "salate-sarbatoare.jpg",
        "pachet-promotional-pentru-124307.jpg",
        "dictionar-olandez-roman-54823.jpg"
        );
public function author() {
      
        return static::randomElement(static::$authors);
    }
    
public function filename() {
      
        return static::randomElement(static::$filenames);
    }
    
 public function label() {
      
        return static::randomElement(static::$labels);
    }

 public function title() {
      
        return static::randomElement(static::$titles);
    }
    
 public function ISBN() {
        return $this->generator->randomNumber(9);
    }

    public function price() {
        return rand(1,50);
    }
   
    public function apperance_year() {
        return static::randomElement(static::$years);
    }

    public function description() {
        return static::randomElement(static::$description);
    }

    public function sdescription() {
        return static::randomElement(static::$sdescription);
    }

    public function stock() {
        return $this->generator->randomNumber(2);
    }

    public function active() {
        return rand(0, 1);
    }


}
