<?php

class Preferences
{
    private $properties = [];

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }

        return self::$instance;
    }

    public function setProperty(string $key, $value)
    {
        $this->properties[$key] = $value;
    }

    public function getProperty(string $key) :string
    {
        if (!isset($this->properties[$key])) {
            throw new \Exception('key not found: ' . $key);
        }

        return $this->properties[$key];
    }
}