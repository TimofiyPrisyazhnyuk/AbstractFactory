<?php

namespace AbstractFactory;

class DigitalProduct implements Product
{
    /**
     * @var int
     */
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }
}
