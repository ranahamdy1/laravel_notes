<?php

interface PaymentMethod {
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with Credit Card";
    }
}

class WalletPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with Wallet";
    }
}

// كلاس مسؤول عن تنفيذ الدفع
class Payment {
    public function process(PaymentMethod $method, $amount) {
        $method->pay($amount);
    }
}

$payment = new Payment();
$payment->process(new CreditCardPayment(), 100);
echo "\n";
$payment->process(new WalletPayment(), 50);
