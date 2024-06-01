<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signin(){
        return view('frontend.customers.signin');
    }
    public function signinsubmit(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);
        if (Auth::attempt(['email'=> $request->email , 'password' =>$request->password])) {
            $user = Auth::user();
            if ($user->user_role === 'customer') {
                return redirect()->route('home.show')->with('success', 'You have been logged in successfully');
            }

        }
         return redirect(route('signin.show'))->with('error',' You have been fail to login ');
    }
}
