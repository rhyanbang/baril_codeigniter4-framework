<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        return view('welcome_message');

    }
    public function adduser() {
        return view('users/add'); 
    }
}

