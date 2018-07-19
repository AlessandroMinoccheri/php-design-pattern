<?php

namespace Strategy;


class payByPayPal implements PaymentStrategy
{

    public function pay($amount)
    {
        return 'Pay ' . $amount . ' with PayPal';
    }
}