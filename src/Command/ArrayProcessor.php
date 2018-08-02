<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 02/08/18
 * Time: 16:18
 */

namespace Command;

class ArrayProcessor
{
    protected $rule;

    public function __construct (Validator $rule)
    {
        $this->rule = $rule;
    }

    public function process(array $values) :bool
    {
        foreach ($values as $value) {
            if ($this->rule->IsValid($value)) {

                return true;
            }
        }

        return false;
    }
}