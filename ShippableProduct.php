<?php

/**
 * Class ShippableProduct
 */
class ShippableProduct implements Product
{
    /**
     * @var float
     */
    private $productPrice;

    /**
     * @var float
     */
    private $shippingCosts;

    /**
     * ShippableProduct constructor.
     * @param int $productPrice
     * @param int $shippingCosts
     */
    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
