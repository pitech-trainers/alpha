<?php
namespace Bookshop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="images")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
      /**
     * @ORM\OneToOne(targetEntity="Product", inversedBy="image")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
   
    protected $product;

    /**
     * @ORM\Column(type="string")
     */
    protected $path;
    
        /**
     * @ORM\Column(type="string")
     */
    protected $filename;

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
     * Set product_id
     *
     * @param integer $productId
     * @return Images
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;
    
        return $this;
    }

    /**
     * Get product_id
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Images
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Images
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set product
     *
     * @param \Bookshop\BookshopBundle\Entity\Product $product
     * @return Image
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