<?php

namespace App\Services;

use App\Payment\CashPayment;
use App\Payment\CheckoutPayment;
use App\Payment\TapPayment;

class PaymentService
{

    public function initizalize(string $paymentType)
    {

        switch ($paymentType) {
            case 'checkout':
                return new CheckoutPayment();
                break;
                
            case 'tap':
                return new TapPayment();
                break;
            
            default:
                return new CashPayment();
                break;
        }

    }

}