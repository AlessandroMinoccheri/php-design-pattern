<?php

namespace DependencyInjection\Tests;

use AbstractFactoryPattern\Vehicle;
use AbstractFactoryPattern\CarFactory;
use AbstractFactoryPattern\BicycleFactory;
use DependencyInjection\Settings;
use DependencyInjection\User;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testCreateUser()
    {
        $sessionLifetime = random_int(0, 999999);
        $providerName = 'provider_' . random_int(0, 999999);

        $settings = new Settings($providerName, $sessionLifetime);
        $user = new User($settings);

        $expected = 'Session lifetime: ' . $sessionLifetime . ' sec,  provider name: ' . $providerName;
        $this->assertEquals($expected, $user->getSettings());
    }
}