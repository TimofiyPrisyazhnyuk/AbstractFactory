<?php

/**
 * Class ProductFactory
 */
class ProductFactory
{
    const SHIPPING_COSTS = 50;

    /**
     * @param int $price
     * @return ShippableProduct
     */
    public function createShippableProduct(int $price): ShippableProduct
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    /**
     * @param int $price
     * @return Product
     */
    public function createDigitalProduct(int $price): Product
    {
        return new DigitalProduct($price);
    }
}
