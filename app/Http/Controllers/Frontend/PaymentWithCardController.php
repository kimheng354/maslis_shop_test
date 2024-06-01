<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RuntimeException;

class PaymentWithCardController extends Controller
{
    public function paymentwithcard(){
        return view('frontend.payment.paymentwithcard');
    }
}
