<?php
namespace Bookshop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
     /**
     * @ORM\Column(type="integer")
     */
    protected $category_id;
    
     /**
     * @ORM\Column(type="decimal")
     */
    protected $price;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $author_id;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $isbn;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $appereance_year;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $short_description;
    
     /**
     * @ORM\Column(type="integer")
     */
    protected $stock;
    
     /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category_id
     *
     * @param integer $categoryId
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;
    
        return $this;
    }

    /**
     * Get category_id
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set author_id
     *
     * @param string $authorId
     * @return Product
     */
    public function setAuthorId($authorId)
    {
        $this->author_id = $authorId;
    
        return $this;
    }

    /**
     * Get author_id
     *
     * @return string 
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Product
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set appereance_year
     *
     * @param string $appereanceYear
     * @return Product
     */
    public function setAppereanceYear($appereanceYear)
    {
        $this->appereance_year = $appereanceYear;
    
        return $this;
    }

    /**
     * Get appereance_year
     *
     * @return string 
     */
    public function getAppereanceYear()
    {
        return $this->appereance_year;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set short_description
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->short_description = $shortDescription;
    
        return $this;
    }

    /**
     * Get short_description
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Product
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}