<?php

namespace App\Payments\Strategies;

use App\Payments\PaymentStrategy;

class CreditCardStrategy implements PaymentStrategy {

    private $cardNumber;
    private $expiryDate;
    private $cvv;

    public function __construct($cardNumber, $expiryDate, $cvv) {
        $this->cardNumber = $cardNumber;
        $this->expiryDate = $expiryDate;
        $this->cvv = $cvv;
    }

    public function pay($amount) {
        // 本来はクレジットカード決済のAPIやライブラリを使って決済を行います。
        echo "クレジットカード（番号: {$this->cardNumber}）で{$amount}円を支払いました。";
    }
}