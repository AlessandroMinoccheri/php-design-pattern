<?php

namespace Observer;


class ProductObserver implements \SplObserver
{
    private $changedProducts = [];

    public function update(\SplSubject $subject)
    {
        $this->changedProducts[] = clone $subject;
    }

    public function getChangedProducts(): array
    {
        return $this->changedProducts;
    }
}