<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get( '/login', function () {
    return view('user.login');
})->name('login');

Route::post( '/login', [UserController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('user.register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/menu', [ProductController::class, 'index'])->name('menu');

Route::get('/bestelling', [ProductController::class, 'logout'])->name('bestelling');
