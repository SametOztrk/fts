<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

	public function showLoginForm()

    { 

      if (Auth::check() && Auth::guard('admin')->check()) {

        return redirect()->intended(route('admin.dashboard'));
      } 
    	return view('auth.admin-login');
    
    }




    
    public function login(Request $request)
    {

		$this->validate($request,[

           'email'   =>'required|email',
           'password'=>'required|min:6'

		]);



        if (Auth::guard('admin')->attempt(['email' => $request->email,'password'=> $request->password ],$request->remember)) {
        	
        	return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();



        return redirect('/admin/login');


    }

   
}
