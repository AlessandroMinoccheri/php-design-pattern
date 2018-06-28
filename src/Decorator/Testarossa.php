<?php

namespace Decorator;

class Testarossa extends CarDecorator
{
    const PRICE = 50000;

    public function calculatePrice(): float
    {
        return $this->car->calculatePrice() + self::PRICE;
    }
    public function getName(): string
    {
        return $this->car->getName() . ' Testarossa';
    }
}