<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage()
    {
        return view('pages.login');
    }

    public function registerPage()
    {
        return view('pages.register');
    }
}
