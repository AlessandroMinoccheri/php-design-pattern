<?php

namespace Observer\Tests;

use Observer\Product;
use Observer\ProductObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInProductPriceToProductObserverBeingNotified()
    {
        $observer = new ProductObserver();
        $product = new Product();
        $product->attach($observer);
        $product->changePrice(random_int(0, 999999));
        $this->assertCount(1, $observer->getChangedProducts());
    }
}