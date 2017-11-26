<?php

class ShirtFactory extends AbstractFactory
{
    public function createProduct(): Shirt
    {
        return new Shirt();
    }
}