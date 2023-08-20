<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function index()
    {
        return view('admin/auth/login');
    }

    public function register()
    {
        return view('admin/auth/register');
    }
    public function user()
    {
        return view('admin/index');
    }
}
