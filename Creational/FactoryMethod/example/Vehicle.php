<?php

class Vehicle
{
    private $currency;

    public function __construct(string $currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }
}