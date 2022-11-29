<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ----------------------- app routes -----------------------

// ---------- main page -------------
Route::get('/', [AppController::class, 'index'])->name('home');

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

// ---------- view profile page -------------
Route::get('/profile/{id?}', [UserController::class, 'profile'])->name('profile');

// ---------- login / signup page -------------
Route::get('/register', [UserController::class, 'create'])->name('register');

// ---------- login auth  -------------
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authentication');

// ---------- store new user -------------
Route::post('/store', [UserController::class, 'store'])->name('store');

// ---------- logout user -------------
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ---------- update profile info -------------
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');

