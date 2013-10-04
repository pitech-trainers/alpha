<?php
namespace Bookshop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */
class Author
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
    protected $author_name;
    
      /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="authors")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;

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
     * Set author_name
     *
     * @param string $authorName
     * @return Author
     */
    public function setAuthorName($authorName)
    {
        $this->author_name = $authorName;
    
        return $this;
    }

    /**
     * Get author_name
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Set author
     *
     * @param \Bookshop\BookshopBundle\Entity\Product $author
     * @return Author
     */
    public function setAuthor(\Bookshop\BookshopBundle\Entity\Product $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Bookshop\BookshopBundle\Entity\Product 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set product
     *
     * @param \Bookshop\BookshopBundle\Entity\Product $product
     * @return Author
     */
    public function setProduct(\Bookshop\BookshopBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Bookshop\BookshopBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}