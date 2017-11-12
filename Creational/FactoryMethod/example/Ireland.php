<?php

class Ireland extends Finance
{
    private $vat = 12;

    public function getVat(): int
    {
        return $this->vat;
    }
}