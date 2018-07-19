<?php
/**
 * Created by PhpStorm.
 * User: alessandrominoccheri
 * Date: 19/07/18
 * Time: 22:23
 */

namespace Strategy;


class payByCash implements PaymentStrategy
{

    public function pay($amount)
    {
        return 'Pay ' . $amount . ' with cash';
    }
}