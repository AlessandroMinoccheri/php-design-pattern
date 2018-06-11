<?php

namespace Prototype\Tests;

use PHPUnit\Framework\TestCase;
use Prototype\PHPBook;
use Prototype\SQLBook;

class PrototypeTest extends TestCase
{
    public function testCreateBook()
    {
        $phpPrototype = new PHPBook();
        $sqlPrototype = new SQLBook();

        for ($i = 0; $i < 5; $i++) {
            $book = clone $phpPrototype;
            $book->setTitle('Php Book No ' . $i);
            $this->assertInstanceOf(PHPBook::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $sqlPrototype;
            $book->setTitle('Sql Book No ' . $i);
            $this->assertInstanceOf(SQLBook::class, $book);
        }
    }
}
