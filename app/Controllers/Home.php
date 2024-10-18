<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //return view('public/test');
         return view('public/sign_in');

    }
    public function SignUp(): string
    {
        return view('public/sign_up');
    }

    public function recoverpw(){
        return view('public/recoverpw');   
    }

    
    public function reset_password($token){
        $data['token'] = $token;
        return view('public/reset_pw', $data);   
    }
}
