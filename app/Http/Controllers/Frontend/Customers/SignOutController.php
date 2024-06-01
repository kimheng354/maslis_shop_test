<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    public function customerlogout(){
        Auth::logout();
        return redirect(route('signin.show'))->with('success', 'You have been logged out successfully');
    }
}
