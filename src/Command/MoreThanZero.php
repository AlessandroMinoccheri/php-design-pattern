<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 02/08/18
 * Time: 16:17
 */

namespace Command;

class MoreThanZero implements Validator
{

    public function isValid($value): bool
    {
        return $value > 0;
    }
}