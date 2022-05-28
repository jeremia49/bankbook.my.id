<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AppController;
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

Route::prefix('app')->middleware('auth')->group(function () {
    Route::get('/home', [AppController::class, 'home'])->name('home');
    Route::get('/profile', [AppController::class, 'profile'])->name('profile');
    Route::get('/mybook', [AppController::class, 'mybook'])->name('mybook');
    Route::get('/browse', [AppController::class, 'browse'])->name('browse');
    Route::get('/addbook', [AppController::class, 'addbook'])->name('addbook');


    Route::post('/addbook', [AppController::class, 'paddbook'])->name('paddbook');
    Route::get('/buybook/{id}', [AppController::class, 'buybook'])->name('buybook');
    Route::get('/download/{id}', [AppController::class, 'download'])->name('download');
    Route::get('/return/{id}', [AppController::class, 'returnbook'])->name('returnbook');
    
});


