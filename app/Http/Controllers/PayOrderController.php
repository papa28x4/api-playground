<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(PaymentGateway $paymentGateway)
    {
        // $paymentGateway = new PaymentGateway();

        // dd($paymentGateway);

        return $paymentGateway->charge(2500);
    }
}
