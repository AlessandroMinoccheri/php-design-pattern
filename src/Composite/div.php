<?php

namespace Composite;

class div extends InputElement
{
    private $elements = [];

    public function createElement(string $text)
    {
        throw new \Exception('This shouldn\'t be called.');
    }

    public function printElement()
    {
        $html = '<div>';
        foreach ($this->elements as $element) {
            $html .= $element->printElement();
        }
        $html .= '</div>';

        return $html;
    }

    public function addElement(InputElement $element)
    {
        $this->elements[] = $element;
    }
}