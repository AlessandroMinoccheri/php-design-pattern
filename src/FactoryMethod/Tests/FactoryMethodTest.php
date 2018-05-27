<?php

namespace FactoryMethod\Tests;

use FactoryMethod\ItalianFactory;
use FactoryMethod\USAFactory;
use FactoryMethod\Vehicle;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanItalianShop()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->createVehicle();
        $this->assertInstanceOf(Vehicle::class, $vehicle);

        $this->assertEquals(ItalianFactory::CURRENCY, $vehicle->getCurrency());
    }

    public function testCanUsaShop()
    {
        $factory = new USAFactory();
        $vehicle = $factory->createVehicle();
        $this->assertInstanceOf(Vehicle::class, $vehicle);

        $this->assertEquals(USAFactory::CURRENCY, $vehicle->getCurrency());
    }
}
