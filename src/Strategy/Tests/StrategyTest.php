<?php

namespace Strategy\Tests;

use PHPUnit\Framework\TestCase;
use Strategy\payByCash;
use Strategy\payByPayPal;

class StrategyTest  extends TestCase
{
    public function testPayWithPayPal()
    {
        $payByPayPal = new PayByPayPal();
        $result = $payByPayPal->pay(1000);

        $this->assertEquals('Pay 1000 with PayPal', $result);
    }

    public function testPayWithCash()
    {
        $payByCash = new PayByCash();
        $result = $payByCash->pay(1000);

        $this->assertEquals('Pay 1000 with cash', $result);
    }
}