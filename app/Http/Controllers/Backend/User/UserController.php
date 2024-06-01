<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function inform()
    {
        $user = Auth::user();
        $users = User::where('user_role', 'admin')->orderBy('id', 'desc')->get();
        return view('backend.user.showadmin', compact('user', 'users'));
    }


    public function user_profile()
    {   
        $user = Auth::user();
        $users = User::where('user_role', 'admin')->orderBy('id', 'desc')->get();
        return view('backend.user.userprofile', compact('user', 'users'));
    }
    public function create()
    {
        $user = Auth::user();
        return view('backend.user.createuser', compact('user'));
    }
    public function store(Request $request)
    {
        // dd($request->all()); // Check if request data is correct

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|max:20',
            'user_role' => 'required|in:admin',
            'password' => 'required|max:10|min:3',
            'avatar' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_role = $request->user_role;
        $user->password = bcrypt($request->password);
        $extension = $request->file('avatar')->extension();
        $filename = date('Y-m-d-H-i-s') . '.' . $extension; //Convert to 2024-05-24.jpg
        $request->file('avatar')->move(public_path('uploads/admin/avatar'), $filename); //move to public with uploads folder
        $user->avatar = $filename;
        $user->save();
        return redirect(route('admin.create.inform'))->with('success', 'Admin Have Successfully Uploads ');
    }
    public function edit($id){
        $user = Auth::user();
        $users =User::where('id',$id)->first();
        return view('backend.user.edituser',compact('user', 'users'));
    }
    
    public function update($id , Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|max:20',
            'user_role' => 'required|in:admin',
            
        ]);
        $user =User::where('id',$id)->first(); 
        if ($request->hasFile('cover')) {
            $request->validate([
                'cover' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
            ]);
            if (file_exists(public_path('uploads/admin/avatar'.$user->avatar)) And !empty($user->avatar)) {
                unlink(public_path('uploads/admin/avatar'.$user->avatar));
            }
             //get only extention of file cover 
             $extension = $request->file('avatar')->extension();
             $filename = date('Y-m-d-H-i-s') . '.' . $extension; //Convert to 2024-05-24.jpg
             $request->file('avatar')->move(public_path('uploads/admin/avatar'), $filename); //move to public with uploads folder
             $user->avatar = $filename;
        };
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_role = $request->user_role;
        $user->update();
        return redirect(route('admin.create.inform'))->with('success','Admin Have been Update Successfully');
    }
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        // Delete the user's image if it exists
        if (!empty($user->avatar) && file_exists(public_path('uploads/admin/avatar/' . $user->avatar))) {
            unlink(public_path('uploads/admin/avatar/' . $user->avatar));
        }

        // Delete the user
        $user->delete();
        return redirect(route('admin.create.inform'))->with('success', 'Admin Have been Delete Successfully');
    }

}
