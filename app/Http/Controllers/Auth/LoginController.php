<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function __construct()
    {   
        if (Auth::check() && Auth::guard('web')->check()) {
            
            $this->redirectTo = route('/');
        } 

        $this->middleware('guest')->except('logout');
    }

    

    public function showLoginForm()

    { 

      if (Auth::guard('admin')->check()) {

        return redirect()->intended(route('admin.dashboard'));
      } 
      
        return view('auth.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function logout(Request $request)

    {

         Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }
}
