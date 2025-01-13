<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get( '/login', function () {
    return view('User.login');
})->name('login');

Route::post( '/login', [UserController::class, 'post_Login'])->name('login_post');

Route::get('/register', function () {
    return view('User.register');
})->name('register');

Route::post('/register', [UserController::class, 'post_Register'])->name('register_post');

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/menu', [ProductController::class, 'index'])->name('menu');

Route::get('/bestellen', [BestellingController::class, 'index']);

Route::get('/bestelling', [BestellingController::class, 'show_order']);
Route::get('/bestelling/{id}', [BestellingController::class, 'show_user_order'])->name("selected_order");

Route::get('/bestelling_geschiedenis', [BestellingController::class, 'order_history'])->name("order_history");


Route::post('/api/register', [ApiController::class, 'register']);
Route::post('/api/login', [ApiController::class, 'login']);
Route::get('/api/products', [ApiController::class, 'all_products']);
Route::get('/api/pizza/{$id}', [ApiController::class, 'get_pizza']);
Route::get('/api/get_next_order', [ApiController::class, 'get_next_order']);
Route::get('/api/drank/{$id}', [ApiController::class, 'get_drank']);
