<?php

namespace Prototype;

class SQLBook extends BookPrototype
{
    function __construct()
    {
        $this->topic = 'SQL';
    }

    function __clone()
    {
    }
}