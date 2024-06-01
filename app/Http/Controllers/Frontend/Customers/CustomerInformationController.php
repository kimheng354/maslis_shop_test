<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerInformationController extends Controller
{
    public function showinfocustomer(){
        $user = Auth::user();
        return view('frontend.customers.customersinfo', compact('user'));
    }
    public function customerorderdetail(){
        return view('frontend.customers.customerorderdetail');
    }
}
