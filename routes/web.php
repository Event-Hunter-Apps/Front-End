<?php

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

Route::get('/', function () {
    return view('template.master');
});

Route::get('/home', function () {
    return view('landingPage');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/edit', function () {
    return view('editwisata');
});

Route::get('/add', function () {
    return view('tambahwisata');
});