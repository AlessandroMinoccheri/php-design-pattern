<?php

namespace Decorator;

class Ferrari implements Car
{
    const PRICE = 100000;

    public function calculatePrice(): float
    {
        return self::PRICE;
    }
    public function getName(): string
    {
        return 'Ferrari';
    }
}