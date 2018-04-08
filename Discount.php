<?php
/**
 * Discount abstract class
 *
 * @author Anil Chaudhari <imanilchaudhari@gmail.com>
 * @version 0.1
 * @package ShoppingCart
 *
 */
namespace imanilchaudhari\ShoppingCart; 


abstract class Discount {

    protected $shoppingCart;

    public function setShoppingCart(Cart $shoppingCart) {
        $this->shoppingCart = $shoppingCart;
    }

    /**
     * Apply discount
     *
     * @abstract
     * @return void
     */
    abstract public function apply();

}
