<?php

class PaymentProcessor {

    protected $strategy;

    public function __construct(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function pay($amount) {
        $this->strategy->pay($amount);
    }


}