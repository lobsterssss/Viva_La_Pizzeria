<?php

use App\Http\Controllers\BestellingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get( '/login', function () {
    return view('user.login');
})->name('login');

Route::post( '/login', [UserController::class, 'post_Login'])->name('login');

Route::get('/register', function () {
    return view('user.register');
})->name('register');

Route::post('/register', [UserController::class, 'post_Register'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/menu', [ProductController::class, 'index'])->name('menu');

Route::get('/bestelling', [BestellingController::class, 'index'])->name('bestelling');


Route::post('/api/register', [UserController::class, 'register']);
Route::post('/api/login', [UserController::class, 'login']);
Route::get('/api/products', [UserController::class, 'all_products']);
Route::get('/api/pizza/{$id}', [UserController::class, 'get_pizza']);
Route::get('/api/drank/{$id}', [UserController::class, 'get_drank']);
