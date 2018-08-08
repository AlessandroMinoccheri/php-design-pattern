<?php

namespace NullObject\Tests;

use NullObject\CreateClient;
use NullObject\NullClient;
use NullObject\Person;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $createClient = new CreateClient(new NullClient());

        $this->assertEquals('', $createClient->getClientType());
    }
    public function testPersonClient()
    {
        $createClient = new CreateClient(new Person());

        $this->assertEquals('Person', $createClient->getClientType());
    }
}
