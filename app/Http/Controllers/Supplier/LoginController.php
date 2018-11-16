<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = 'supplier/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:supplier')->except('logout');
    }

    public function userLoginForm()
    {
        return view('user.auth.login');
    }

    public function showLoginForm()
    {
        return view('supplier.Auth.login');
    }

    protected function guard()
    {
        return Auth::guard('supplier');
    }

    public function logout(Request $request)
    {
        Auth::guard('supplier')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/supplier/login');
    }
}
