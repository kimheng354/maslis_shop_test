<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function authloginform(){
        return view('backend.auth.login');
    }
    public function authloginsubmit(Request $request){
            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required|min:3|max:5',
            ]);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                if ($user->user_role === 'admin') {
                    return redirect()->route('admin.dashboard.show')->with('success', 'You have been logged in successfully');
                } else {
                    return redirect()->route('authlogin.show')->withErrors(['unauthorized' => 'Unauthorized User']);
                }
            }
         return redirect(route('authlogin.show'))->with('error',' You have been fail to login ');
    }
}
