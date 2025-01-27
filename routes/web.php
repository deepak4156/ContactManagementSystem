<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');

Route::get('/registration', [LoginController::class, 'register'])->name('register');
Route::post('/registration', [LoginController::class, 'registerPost'])->name('register.post');