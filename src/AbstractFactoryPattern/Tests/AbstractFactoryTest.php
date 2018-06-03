<?php

namespace FactoryMethod\Tests;

use FactoryMethod\ItalianFactory;
use FactoryMethod\Vehicle;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateVehicle()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->createVehicle();

        $this->assertInstanceOf(Vehicle::class, $vehicle);
        $this->assertEquals(ItalianFactory::CURRENCY, $vehicle->getCurrency());
    }
}