<?php

namespace AbstractFactoryPattern;

class Vehicle
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}