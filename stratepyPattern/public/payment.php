<?php

//本当はここではないけれど、Paymentの呼び出しを書きたいのでここに書きます



$creditCardPayment = new PaymentProcessor(new CreditCardStrategy());
$creditCardPayment->pay(1000);

$bankTransferPayment = new PaymentProcessor(new BankTransferStrategy());
$bankTransferPayment->pay(1000);