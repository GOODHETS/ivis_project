<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('index'); // Displays the 'index' view
    }

    public function login() {
        return view('login'); // Displays the 'login' view
    }

    public function signup() {
        return view('signup'); // Displays the 'signup' view
    }

    public function profile() {
        return view('profile'); // Displays the 'profile' view
    }
}
