<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CreatorController;

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



Route::get('/', [HomeController::class, 'index'])->name('homepage');



// Auth
Route::get('/register', [AuthController::class, 'register'])->name('auth.register.form');
Route::post('/register', [AuthController::class, 'registerPost'])->name('auth.register.post');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login.form');
Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//game-list
Route::get('/game-list', [GameController::class, 'list'])->name('game.list');

//creation
Route::get('/game/add', [CreatorController::class, 'game'])->name('creator.game');
Route::post('/game/add', [CreatorController::class, 'gamePost'])->name('creator.game.post');
Route::get('/studio/add', [CreatorController::class, 'studio'])->name('creator.studio');
Route::post('/studio/add', [CreatorController::class, 'studioPost'])->name('creator.studio.post');
Route::get('/platform/add', [CreatorController::class, 'platform'])->name('creator.platform');
Route::post('/platform/add', [CreatorController::class, 'platformPost'])->name('creator.platform.post');
Route::get('/category/add', [CreatorController::class, 'category'])->name('creator.category');
Route::post('/category/add', [CreatorController::class, 'categoryPost'])->name('creator.category.post');
