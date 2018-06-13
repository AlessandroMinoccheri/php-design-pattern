<?php

namespace ServiceLocator;

class ServiceLocator
{
    private $log;

    public function __construct()
    {
        $this->log = new Log();
    }

    public function getLog(): Log
    {
        return $this->log;
    }
}