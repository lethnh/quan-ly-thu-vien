<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    // // /**
    // //  * Create a new controller instance.
    // //  *
    // //  * @return void
    // //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm()
    {
        return view('frontend.pages.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            if (Auth::user()->role === 1) {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }
        return $this->sendFailedLoginResponse($request);
    }
}
