<?php

namespace FactoryMethod\Tests;

use Composite\div;
use Composite\H1;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testAddInputElement()
    {
        $h1 = new H1();
        $h1->createElement('Hello World');
        $h1->printElement();

        $div = new div();
        $div->addElement($h1);
        $html = $div->printElement();

        $this->assertEquals('<div><h1>Hello World</h1></div>', $html);
    }
}