<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentWithQrKhmerController extends Controller
{
    public function paymentwithqrkhmer(){
        return view('frontend.payment.paymentwithqrkhmer');
    }
}
