<?php

class Italy extends Finance
{
    private $vat = 27;

    public function getVat(): int
    {
        return $this->vat;
    }
}