<?php

namespace App\Payments\Strategies;

use App\Payments\PaymentStrategy;

class DigitalWalletStrategy implements PaymentStrategy {

    private $walletId;

    public function __construct($walletId) {
        $this->walletId = $walletId;
    }

    public function pay($amount) {
        // ここでデジタルウォレットの処理を模倣します。
        echo "デジタルウォレット（ID: {$this->walletId}）から{$amount}円を支払いました。";
    }
}