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
    protected $redirectTo = '/supplier/ordering';

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
//        Auth::guard('supplier');
        $credentials = $request->only('email', 'password');

        if (Auth::guard('supplier')->attempt($credentials)) {
          return redirect('/supplier/ordering');
        }
//        $this->validateLogin($request);
//        $email = $request->email;
//        $password = $request->password;
//        if (Auth::attempt(['email' => $email, 'password' => $password])) {
//          return redirect('/supplier/ordering');
//        }

        return redirect()->back();
    }
}
