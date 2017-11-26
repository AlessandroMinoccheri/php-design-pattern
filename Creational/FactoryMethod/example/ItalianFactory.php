<?php

class ItalianFactory extends Shop
{
    const CURRENCY = 'EUR';

    public function createVehicle()
    {
        return new Vehicle(self::CURRENCY);
    }
}