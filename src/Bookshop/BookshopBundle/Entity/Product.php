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
     * @ORM\OneToOne(targetEntity="Image", mappedBy="products")
     */
    protected $image;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
     /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;
    
     /**
     * @ORM\Column(type="decimal")
     */
    protected $price;
    
     /**
     * @ORM\OneToMany(targetEntity="Author", mappedBy="products")
     */
    protected $authors;
    
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
     * @param integer $category_Id
     * @return Product
     */
    public function setCategory_Id($category_Id)
    {
        $this->category_id = $category_Id;
    
        return $this;
    }

    /**
     * Get category_id
     *
     * @return integer 
     */
    public function getCategory_Id()
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
     * Constructor
     */
    public function __construct()
    {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add authors
     *
     * @param \Bookshop\BookshopBundle\Entity\Author $authors
     * @return Product
     */
    public function addAuthor(\Bookshop\BookshopBundle\Entity\Author $authors)
    {
        $this->authors[] = $authors;
    
        return $this;
    }

    /**
     * Remove authors
     *
     * @param \Bookshop\BookshopBundle\Entity\Author $authors
     */
    public function removeAuthor(\Bookshop\BookshopBundle\Entity\Author $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }
}