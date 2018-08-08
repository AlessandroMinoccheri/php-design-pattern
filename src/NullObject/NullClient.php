<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 08/08/18
 * Time: 07:23
 */

namespace NullObject;


class NullClient implements ClientInterface
{
    public function getType() :string
    {
        return '';
    }
}
