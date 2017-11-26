<?php

class USAFactory extends Shop
{
    const CURRENCY = 'USD';

    public function createVehicle()
    {
        return new Vehicle(self::CURRENCY);
    }
}