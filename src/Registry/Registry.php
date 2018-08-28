<?php

namespace Registry;

class Registry
{
    private static $storedObjects = [];

    public static function set(string $key, $value)
    {
        self::$storedObjects[$key] = $value;
    }

    public static function get(string $key)
    {
        return self::$storedObjects[$key];
    }

}