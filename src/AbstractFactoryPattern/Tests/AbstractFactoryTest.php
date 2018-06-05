<?php

namespace FactoryMethod\Tests;

use AbstractFactoryPattern\Vehicle;
use AbstractFactoryPattern\CarFactory;
use AbstractFactoryPattern\BicycleFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCreateShirt()
    {
        $factory = new CarFactory();
        $car = $factory->createVehicle('Ferrari');

        $this->assertInstanceOf(Vehicle::class, $car);
    }

    public function testCreateShoes()
    {
        $factory = new BicycleFactory();
        $bicycle = $factory->createVehicle('Bianchi');

        $this->assertInstanceOf(Vehicle::class, $bicycle);
    }
}