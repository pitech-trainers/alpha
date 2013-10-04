<?php 
namespace Bookshop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass="Bookshop\BookshopBundle\Entity\Repository\CartItemRepository")
 * @ORM\Table(name="cart_items")
 */
class CartItem
{
        /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cart_items")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    protected $cart;
     /**
     * @ORM\Column(type="integer")
     */
    protected $product_id;
     /**
     * @ORM\Column(type="string")
     */
    protected $title;
     /**
     * @ORM\Column(type="integer")
     */
    protected $quantity;
     /**
     * @ORM\Column(type="string")
     */
    protected $price;
    
    

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
     * @return CartItem
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
     * Set title
     *
     * @param string $title
     * @return CartItem
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
     * Set quantity
     *
     * @param integer $quantity
     * @return CartItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return CartItem
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set cart_id
     *
     * @param \Bookshop\BookshopBundle\Entity\Cart $cartId
     * @return CartItem
     */
    public function setCartId(\Bookshop\BookshopBundle\Entity\Cart $cartId = null)
    {
        $this->cart_id = $cartId;
    
        return $this;
    }

    /**
     * Get cart_id
     *
     * @return \Bookshop\BookshopBundle\Entity\Cart 
     */
    public function getCartId()
    {
        return $this->cart_id;
    }

    /**
     * Set cart
     *
     * @param \Bookshop\BookshopBundle\Entity\Cart $cart
     * @return CartItem
     */
    public function setCart(\Bookshop\BookshopBundle\Entity\Cart $cart = null)
    {
        $this->cart = $cart;
    
        return $this;
    }

    /**
     * Get cart
     *
     * @return \Bookshop\BookshopBundle\Entity\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }
}