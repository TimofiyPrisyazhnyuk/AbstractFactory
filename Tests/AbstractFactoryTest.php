<?php

namespace AbstractFactory\Tests;

use AbstractFactory\ProductFactory;

require __DIR__ . "/../Product.php";
require __DIR__ . "/../ProductFactory.php";
require __DIR__ . "/../DigitalProduct.php";
require __DIR__ . "/../ShippableProduct.php";

class AbstractFactoryTest
{
    public function testAll()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        echo $product->calculatePrice() . "\n";
        $product = $factory->createShippableProduct(150);
        echo $product->calculatePrice() . "\n";
    }
}

print_r((new AbstractFactoryTest)->testAll());
