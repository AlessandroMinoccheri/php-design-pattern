<?php

namespace Decoraqtor\Tests;

use Decorator\Ferrari;
use Decorator\Testarossa;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCalculatePriceForFerrari()
    {
        $car = new Ferrari();
        $this->assertEquals(100000, $car->calculatePrice());
        $this->assertEquals('Ferrari', $car->getName());
    }

    public function testCalculatePriceForFerrariTestarossa()
    {
        $car = new Ferrari();
        $testarossa = new Testarossa($car);
        $this->assertEquals(150000, $testarossa->calculatePrice());
        $this->assertEquals('Ferrari Testarossa', $testarossa->getName());
    }
}