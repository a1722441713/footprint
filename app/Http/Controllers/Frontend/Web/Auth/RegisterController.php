<?php

namespace App\Http\Controllers\Frontend\Web\Auth;

use App\Models\Generaluser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

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
    protected $redirectTo = '';


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:generaluser',
            'password' => 'required|string|min:6|confirmed',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = Generaluser::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_token' => str_random(40),
            'is_active' => 0
        ]);

        $this->sendVerifyEmailTo($user);
        return $user;
    }

    public function showRegistrationForm()
    {
        return view('footprint.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('frontend_web');
    }

    public function sendVerifyEmailTo($user)
    {
        Mail::send('footprint.auth.email',['user'=>$user],function ($message) use ($user) {
            $to = $user->email;
            $message->to($to)->subject('激活邮件');
        });
    }
}
