<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //新用户注册登陆控制器
    public function login()
    {
        return view('login.home');
    }

    public function logout()
    {
        return view('home');
    }
}
