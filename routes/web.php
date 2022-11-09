<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\userController;
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
Route::get('/', [appController::class, 'index'])->name('home');

// ---------- appointment page -------------
Route::get('/appointment', function () {

    return view('app.appointment',);
})->name('appointment');


// ---------- Contact page -------------

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');


// ---------- Checkout page -------------

Route::get('/checkout', [appController::class, 'checkout'])->name('checkout');


// ---------- About page -------------

Route::get('/about', [appController::class, 'about'])->name('about');



// ----------------------- User routes -----------------------

// ---------- profile page -------------
Route::get('/profile',[userController::class , 'profile'])->name('profile');
