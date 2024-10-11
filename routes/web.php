<?php
use App\Http\Controllers\Controller; 
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController; // Ensure this line is present
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;


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

//change  password
Route::get('/change-password', [RegisterController::class, 'showChangePasswordForm'])->name('change.password');
Route::post('/change-password', [RegisterController::class, 'changePassword']);

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Main landing page route
Route::get('/main_landing_page', function () {
    return view('main_landing_page');
})->name('main.landing.page'); // Optional: name it for better route referencing

//create profile 
Route::get('/create-profile', function () {
    return view('create-profile');
})->name('create-profile');

// About route
Route::get('/about', function () {
    return view('about');
})->name('about'); // Ensure this is the only definition for the about route

// profile route
Route::get('/profile', function () {
    return view('profile');
})->name('profile'); // Ensure this is the only definition for the about route

// contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Ensure this is the only definition for the about route

// settings route
Route::get('/settings', function () {
    return view('settings');
})->name('settings'); // Ensure this is the only definition for the about route

//comtact page
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


