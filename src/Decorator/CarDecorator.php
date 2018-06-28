<?php

namespace Decorator;

abstract class CarDecorator implements Car
{
    /**
     * @var Car
     */
    protected $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }
}