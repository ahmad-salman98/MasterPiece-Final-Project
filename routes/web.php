<?php

use App\Http\Controllers\appController;
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
Route::get('/', [appController::class, 'index']);
Route::get('/index', [appController::class, 'index']);
