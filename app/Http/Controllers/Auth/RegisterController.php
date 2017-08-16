<?php

namespace cbrcleaning\Http\Controllers\Auth;

use cbrcleaning\User;
use Validator;
use cbrcleaning\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('backend.auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/administrator';

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
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'address'       => 'required|max:255',
            'city'          => 'required|max:255',
            'birthday'      => 'required',
            'phone'         => 'required|max:15|numeric',            
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/|confirmed',
            'terms'         => 'required',
            'zipcode'       => 'required|numeric',
            'answer1'       => 'required|max:255',
            'answer2'       => 'required|max:255',
            'answer3'       => 'required|max:255',
            'question1'     => 'required|max:255',
            'question2'     => 'required|max:255',
            'question3'     => 'required|max:255',
        ]);



    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $fields = [
            'first_name'                => $data['first_name'],
            'last_name'                 => $data['last_name'],
            'phone'                     => $data['phone'],
            'address'                   => $data['address'],
            'city'                      => $data['city'],
            'zipcode'                   => $data['zipcode'],
            'birthday'                  => $data['birthday'],
            'user_group_id'             => $data['user_group_id'],         
            'password'                  => bcrypt($data['password']),
            'email'                     => $data['email'],
            'registration_ip'           => $data['registration_ip'],
            'question1'                 => $data['question1'],
            'question2'                 => $data['question2'],
            'question3'                 => $data['question3'],
            'answer1'                   => $data['anwswer1'],
            'answer2'                   => $data['anwswer2'],
            'answer3'                   => $data['anwswer3'],
            'last_visited'              => $data['last_visited'],
            'registration_date'         => $data['registration_date'],
            'recieve_email'             => $data['recieve_email'],
            'blocked_user'              => $data['blocked_user'],
            'require_password_reset'    => $data['require_password_reset'],          
        ];
        if (config('auth.providers.users.field','email') === 'login' && isset($data['login'])) {
            $fields['login'] = $data['login'];
        }
        return User::create($fields);
    }
}
