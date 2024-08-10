<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('public/sign_in');
    }
    public function SignUp(): string
    {
        return view('public/sign_up');
    }
}
