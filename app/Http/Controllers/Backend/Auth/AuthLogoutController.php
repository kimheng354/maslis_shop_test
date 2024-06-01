<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogoutController extends Controller
{
    public function authlogout(){
        Auth::logout();
        return redirect(route('authlogin.show'))->with('success','You have been logout successfull');
    }
}
