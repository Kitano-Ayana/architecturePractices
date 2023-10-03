<?php

namespace App\Payments\Contracts;

interface PaymentStrategy {
    public function pay($amount);
}