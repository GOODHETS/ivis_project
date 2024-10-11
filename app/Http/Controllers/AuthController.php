<?php

namespace App\Http\Controllers;

use App\Models\User; // Ensure to import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/main_landing_page'); 
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        // Validate registration input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'confirmed', // Must match password_confirmation
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one digit
                'regex:/[@$!%*?&]/', // At least one special character
            ],
        ]);

        // Create the user after validation
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt password
        ]);

        // Optionally log the user in after registration
        Auth::login($user);

        return redirect()->intended('/main_landing_page');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login after logout
    }
}
