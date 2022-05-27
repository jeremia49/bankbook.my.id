<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/signup', [UserController::class,'psignup'])->name('psignup');
Route::post('/login', [UserController::class,'plogin'])->name('plogin');



