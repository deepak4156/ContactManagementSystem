<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');

Route::get('/registration', [LoginController::class, 'register'])->name('register');
Route::post('/registration', [LoginController::class, 'registerPost'])->name('register.post');

Route::middleware(['auth'])->group(function () {
    Route::post('/createCustomer', [CustomerController::class, 'createCustomer'])->name('createCustomer');
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');
});