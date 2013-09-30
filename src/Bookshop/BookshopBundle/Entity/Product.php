<?php
namespace Bookshop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bookshop\BookshopBundle\Entity\Repository\ProductRepository")
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
     * @ORM\OneToOne(targetEntity="Image")
     * @ORM\JoinColumn(name="imageId", referencedColumnName="id")
     */
    protected $image;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
     /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="categoryId", referencedColumnName="id")
     */
    protected $category;
    
     /**
     * @ORM\Column(type="decimal")
     */
    protected $price;
    
      /**
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumn(name="authorId", referencedColumnName="id")
 */
    protected $authors;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $isbn;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $appereanceYear;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $shortDescription;
    
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
     * Set appereanceYear
     *
     * @param string $appereanceYear
     * @return Product
     */
    public function setAppereanceYear($appereanceYear)
    {
        $this->appereanceYear = $appereanceYear;
    
        return $this;
    }

    /**
     * Get appereanceYear
     *
     * @return string 
     */
    public function getAppereanceYear()
    {
        return $this->appereanceYear;
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
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    
        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
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

    /**
     * Set image
     *
     * @param \Bookshop\BookshopBundle\Entity\Image $image
     * @return Product
     */
    public function setImage(\Bookshop\BookshopBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Bookshop\BookshopBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set category
     *
     * @param \Bookshop\BookshopBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Bookshop\BookshopBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Bookshop\BookshopBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set authors
     *
     * @param \Bookshop\BookshopBundle\Entity\Author $authors
     * @return Product
     */
    public function setAuthors(\Bookshop\BookshopBundle\Entity\Author $authors = null)
    {
        $this->authors = $authors;
    
        return $this;
    }

    /**
     * Get authors
     *
     * @return \Bookshop\BookshopBundle\Entity\Author 
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}