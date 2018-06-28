<?php

namespace Decorator;

interface Car
{
    public function calculatePrice(): float;

    public function getName(): string;
}