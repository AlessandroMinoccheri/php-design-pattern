<?php

namespace AbstractFactoryPattern;

abstract class AbstractFactory
{
    abstract public function createVehicle($name);
}