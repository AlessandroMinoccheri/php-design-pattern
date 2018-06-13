<?php

namespace ServiceLocator\Tests;

use PHPUnit\Framework\TestCase;
use ServiceLocator\Log;
use ServiceLocator\ServiceLocator;

class ServiceLocatorTest extends TestCase
{
    public function testCreateServiceLocator()
    {
        $serviceLocator = new ServiceLocator();

        $this->assertInstanceOf(Log::class, $serviceLocator->getLog());
    }
}
