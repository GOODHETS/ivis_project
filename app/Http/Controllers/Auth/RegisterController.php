<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('auth.register'); // Return the registration view
    }

    // Store a new user
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

    // Show the change password form
    public function showChangePasswordForm()
    {
        return view('auth.change-password'); // Return the change password view
    }

    // Handle the password change request
    public function changePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed', // Ensure new password confirmation
        ]);

        // Check if the current password matches the user's password
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match.']);
        }

        // Update the user's password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Redirect back with success message
        return back()->with('status', 'Password changed successfully!');
    }
}
