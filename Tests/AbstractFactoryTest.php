<?php

namespace Tests;

use ProductFactory;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class AbstractFactoryTest
 * @package AbstractFactory\Tests
 */
class AbstractFactoryTest
{
    /**
     * Test factory.
     */
    public function testAll()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        echo $product->calculatePrice() . "\n";
        $product = $factory->createShippableProduct(150);
        echo $product->calculatePrice() . "\n";
    }
}

// Run test.
print_r((new AbstractFactoryTest)->testAll());
