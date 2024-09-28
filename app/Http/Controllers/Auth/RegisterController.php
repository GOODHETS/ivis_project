<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Make sure to import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register'); // Return the registration view
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation
        ]);

        // Create a new user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before saving
        ]);

        // Redirect to login or home after successful registration
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }
}
