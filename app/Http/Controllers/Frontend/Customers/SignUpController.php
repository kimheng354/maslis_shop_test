<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Whoops\Run;

class SignUpController extends Controller
{
    public function signup(){
        return view('frontend.customers.signup');
    }
}
