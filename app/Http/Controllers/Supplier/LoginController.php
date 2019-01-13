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

  use AuthenticatesUsers
  {
    logout as performLogout;
  }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/supplier/mypage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:supplier')->except('logout');
    }

    public function supplierLoginForm()
    {
        return view('supplier.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('supplier')->attempt($credentials)) {
          return redirect('/supplier/mypage');
        }

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect('/supplier/login');
    }
}
