<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

 public function loginForm()
 {
       return view('admin.login');
    }
    
public function login(Request $request)
{

	$this->validate($request,[
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

    $userCredentials = $request->only('email', 'password');
    // $admin = Admin::where('email',$userCredentials['email'])->first();
    // if (Hash::check($userCredentials['password'], $admin->password)) {
    //     Auth::guard('admin')->login($admin);
    //     return redirect()->intended('/admin/');
    // }

	 if (Auth::guard('admin')->attempt($userCredentials)) {

            return redirect()->intended('/admin/');
        }
        return back()->with("error","Wrong Credentials");
}

        public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with("error","You are signed out successfully");
    }
}


