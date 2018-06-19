<?php

namespace DependencyInjection;

class Settings
{
    private $providerName;

    private $sessionLifetime;

    public function __construct(string $providerName, int $sessionLifetime)
    {
        $this->providerName = $providerName;
        $this->sessionLifetime = $sessionLifetime;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }

    public function getSessionLifetime()
    {
        return $this->sessionLifetime;
    }
}