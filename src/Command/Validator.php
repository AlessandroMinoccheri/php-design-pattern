<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 02/08/18
 * Time: 16:16
 */

namespace Command;

interface Validator
{
    public function isValid($value) :bool ;
}