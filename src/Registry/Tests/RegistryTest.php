<?php

namespace Prototype\Tests;

use PHPUnit\Framework\TestCase;
use Registry\Registry;

class RegistryTest extends TestCase
{
    public function testRegistry()
    {
        $object = new \stdClass();

        Registry::set('stdClass', $object);

        $return = Registry::get('stdClass');

        $this->assertSame($object, $return);
    }
}
