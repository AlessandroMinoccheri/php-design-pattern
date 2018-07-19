<?php

namespace Strategy;

interface PaymentStrategy {
    public function pay($amount);
}

