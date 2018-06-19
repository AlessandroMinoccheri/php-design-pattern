<?php

namespace DependencyInjection;

class User
{
    private $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function getSettings()
    {
        return 'Session lifetime: ' . $this->settings->getSessionLifetime() .
            ' sec,  provider name: ' . $this->settings->getProviderName();
    }
}