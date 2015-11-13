<?php

namespace imanilchaudhari\ShoppingCart;

class TestDiscount extends Discount {
    public $rate = 30;

    public function apply() {
        foreach ($this->shoppingCart as $position) {
            $quantity = $position->getQuantity();
            if ($quantity > 1) {
                $productPrice = $position->getPrice();
                $discountPrice = $this->rate * $position->getPrice() / 100;
                $position->addDiscountPrice($discountPrice);
            }
        }
    }
}
