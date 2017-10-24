<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    //
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        //validations here

        //taking data form form

        $credentials = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];

        //checking if the validation is correct or not
        if($this->auth->attempt($credentials,$request->input('remember_me')))
        {
          return redirect()->route('dashboard');
        }
        return view('auth.login')->with('error_message','Invalid Username or password');



    }

    public function logout()
    {
         Auth::logout();
        return view('auth.login');

    }
}
