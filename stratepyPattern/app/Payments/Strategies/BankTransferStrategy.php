<?php

namespace App\Payments\Strategies;

use App\Payments\PaymentStrategy;

class BankTransferStrategy implements PaymentStrategy {

    private $bankAccountNumber;

    public function __construct($bankAccountNumber) {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    public function pay($amount) {
        // ここで銀行振り込みの処理を本来は行う（今回はコメントをする）
        echo "銀行口座（{$this->bankAccountNumber}）から{$amount}円を振り込みました。";
    }
}