<?php

namespace App\Http\Controllers\Frontend\Customers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Whoops\Run;

class SignUpController extends Controller
{
    public function signup()
    {
        return view('frontend.customers.signup');
    }
    public function signupsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:3|max:20',
            'phone' => 'required',
            're_pass' => 'required|same:password',

        ]);

        // echo $request;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            "password" => bcrypt($request->password),
            'phone' => $request->phone,
        ]);
        if (!$user) {
            return redirect(route('signup.show'))->with('error', "Register Failed !!");
        }
        return redirect(route('signin.show'))->with('success', "You Have Successfully Register ");
    }
}
