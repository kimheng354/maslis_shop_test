<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function signin(){
        return view('frontend.customers.signin');
    }
}
