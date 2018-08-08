<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 08/08/18
 * Time: 07:21
 */

namespace NullObject;


class Person implements ClientInterface
{

    const TYPE = 'Person';

    public function getType() :string
    {
        return self::TYPE;
    }
}
