<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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



Route::get('/login', [LoginController::class, 'view'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'view'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'val'])->middleware('guest');

Route::get('/', [BookController::class, 'view'])->name('home');
Route::get('/detail/{id}', [BookController::class, 'detail']);

Route::get('/profile/{id}', [ProfileController::class, 'view']);
Route::post('/updateProfile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/cart', [CartController::class, 'view'])->middleware('auth');
Route::post('/cart', [CartController::class, 'insert'])->middleware('auth');
Route::post('/cartDelete', [CartController::class, 'delete'])->middleware('auth');
Route::post('/submitCart', [CartController::class, 'submit'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'view'])->name('admin')->middleware('auth');
Route::post('/userDelete', [AdminController::class, 'delete'])->middleware('auth');
Route::get('/updatePage/{id}', [AdminController::class, 'updatePage'])->middleware('auth');
Route::post('/updateRole', [AdminController::class, 'update'])->middleware('auth');

Route::get('/change/{id}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
