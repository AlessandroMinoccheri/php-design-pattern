<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 02/08/18
 * Time: 16:20
 */

namespace Command\Tests;


use Command\ArrayProcessor;
use Command\EqualsZero;
use Command\MoreThanZero;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testMoreThanZeroValidator()
    {
        $moreThanZeroValidator = new MoreThanZero();
        $arrayProcessor = new ArrayProcessor($moreThanZeroValidator);

        $this->assertTrue($arrayProcessor->process([1]));
        $this->assertFalse($arrayProcessor->process([-1]));
    }

    public function testEqualsZeroValidator()
    {
        $equalsZeroValidator = new EqualsZero();
        $arrayProcessor = new ArrayProcessor($equalsZeroValidator);

        $this->assertTrue($arrayProcessor->process([0]));
        $this->assertFalse($arrayProcessor->process([-1]));
    }
}