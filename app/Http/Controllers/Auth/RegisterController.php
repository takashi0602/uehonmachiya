<?php

namespace App\Http\Controllers\Auth;

use App\Models\Rank;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/mypage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'kana' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'sex' => ['required'],
            'postal' => ['required', 'string', 'digits:7'],
            'address' => ['required', 'string', 'max:255'],
            'tel' => ['string', 'digits_between:8,11'],
            'birth' => ['date']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        User::create([
            'name' => $data['name'],
            'kana' => $data['kana'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sex' => $data['sex'],
            'postal' => $data['postal'],
            'address' => $data['address'],
            'tel' => $data['tel'],
            'birth' => $data['birth'],
            'point' => 0,
        ]);

        Rank::create([
            'user_id' => User::orderby('id', 'desc')->first()->id,
            'money' => 0
        ]);

        return User::orderby('id', 'desc')->first();
    }

    public function userRegistrationForm() {
        return view('user.auth.register');
    }
}
