<?php

namespace Prototype;

class PHPBook extends BookPrototype
{
    function __construct()
    {
        $this->topic = 'PHP';
    }

    function __clone()
    {
    }
}