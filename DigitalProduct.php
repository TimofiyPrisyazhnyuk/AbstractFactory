<?php

/**
 * Class DigitalProduct
 */
class DigitalProduct implements Product
{
    /**
     * @var int
     */
    private $price;

    /**
     * DigitalProduct constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /*
     * Calculate price.
     */
    public function calculatePrice(): int
    {
        return $this->price;
    }
}
