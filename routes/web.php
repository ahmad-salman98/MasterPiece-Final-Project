<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// ----------------------- app routes -----------------------

// ---------- main page -------------
Route::get('/', [AppController::class, 'index'])->name('home');

Route::post('payment', [AppController::class, 'payment'])->name('payment');

// ---------- appointment page -------------
Route::get('/appointment', function () {

    return view('app.appointment',);
})->name('appointment');


// ---------- Contact page -------------

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');


// ---------- Checkout page -------------

Route::get('/checkout', [AppController::class, 'checkout'])->name('checkout');




// ---------- About page -------------

Route::get('/about', [AppController::class, 'about'])->name('about');


// ----------------------- User routes -----------------------

// ---------- store new user -------------
Route::post('/store', [UserController::class, 'store'])->name('store');

// ---------- login / signup page -------------
Route::get('/register', [UserController::class, 'create'])->name('register');

// ---------- login auth  -------------
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authentication');

// ---------- logout user -------------
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ---------- view profile page -------------
Route::get('/profile/{id?}', [UserController::class, 'profile'])->name('profile');

// ---------- update profile info -------------
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');

// ---------- view user's video -------------
Route::get('/show/video/{id}/{userId}', [UserController::class, 'viewVideo'])->name('viewVideo');

// ---------- edit password -------------
Route::post('/updatePassword', [UserController::class, 'updatePassword'])->name('updatePassword');

// ---------- edit profile info -------------
Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('editProfile');
