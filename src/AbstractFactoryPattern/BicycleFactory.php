<?php

namespace AbstractFactoryPattern;

class BicycleFactory extends AbstractFactory
{
    public function createVehicle($name): Vehicle
    {
        return new Bicycle($name);
    }
}