<?php

namespace Composite;

class H1 extends InputElement
{
    private $text;

    public function createElement(string $text)
    {
        $this->text = $text;
    }

    public function printElement()
    {
        return '<h1>' . $this->text . '</h1>';
    }

    public function addElement(InputElement $element)
    {
        throw new \Exception('This shouldn\'t be called.');
    }
}