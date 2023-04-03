<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public $title = [];

    public function login(){

        $this->title['title'] = 'Login';

        return view('admin.login', $this->title);


    }
}
