<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'Login'])->name('login');
Route::post('/register', [RegisterController::class, 'Register'])->name('register');
Route::get('/registered-users', [UserController::class, 'RegisteredUsers'])->name('registered.users');
