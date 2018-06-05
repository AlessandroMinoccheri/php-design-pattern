<?php

namespace AbstractFactoryPattern;

class CarFactory extends AbstractFactory
{
    public function createVehicle($name): Vehicle
    {
        return new Car($name);
    }
}