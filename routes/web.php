<?php
use App\Http\Controllers\Controller; 
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController; // Ensure this line is present
use App\Http\Controllers\ProfileController;


// Home route
Route::get('/', [UserController::class, 'index'])->name('home');

// Signup routes
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login'); // Ensure this is defined
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Profile route
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Test route
Route::middleware(['auth'])->group(function () {
    Route::get('/test', function () {
        return view('test'); // Load your test view
    });
});


