<?php

/**
 * CartPosition
 *
 * @author Anil Chaudhari <imanilchaudhari@gmail.com>
 * @version 0.1
 * @package ShoppingCart
 */
namespace imanilchaudhari\ShoppingCart;
 
interface CartPosition {
    /**
     * @return mixed id
     */
    public function getId();
    /**
     * @return float price
     */
    public function getPrice();
}
