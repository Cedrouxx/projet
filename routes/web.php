<?php

use Illuminate\Support\Facades\Route;

//Controller
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});


// Auth
Route::get('/register', [AuthController::class, 'register'])->name('auth.register.form');
Route::post('/register', [AuthController::class, 'registerPost'])->name('auth.register.post');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login.form');
Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
