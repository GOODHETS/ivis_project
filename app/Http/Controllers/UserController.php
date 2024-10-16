<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('index'); // Displays the 'index' view
    }

    public function login() {
        return view('auth.login'); // Displays the 'login' view
    }

    public function signup() {
        return view('auth.signup'); // Displays the 'signup' view
    }

    public function  main_landing_page() {
        return view('main_landing_page'); // Displays the 'home_landing_page' view
    }

    public function  about() {
        return view('about'); // Displays the 'about' view
    }

    public function  profile () {
        return view('profile'); // Displays the 'profile' view
    }

    public function  settings () {
        return view('settings'); // Displays the 'settings' view
    }
}
