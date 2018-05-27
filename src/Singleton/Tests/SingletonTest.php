<?php

namespace Singleton\Tests;

use Singleton\Preferences;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSameInstance()
    {
        $first = Preferences::getInstance();
        $second = Preferences::getInstance();

        $this->assertInstanceOf(Preferences::class, $first);
        $this->assertSame($first, $second);
        $this->assertEquals($first, $second);
    }
}