<?php

namespace Composite;

abstract class InputElement
{
    abstract public function createElement(string $text);
    abstract public function printElement();
    abstract public function addElement(InputElement $element);
}