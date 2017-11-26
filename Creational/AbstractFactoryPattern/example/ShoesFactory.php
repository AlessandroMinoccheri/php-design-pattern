<?php

class ShoesFactory extends AbstractFactory
{
    public function createProduct(): Shoes
    {
        return new Shoes();
    }
}