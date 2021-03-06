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
    return view('welcome');
});

Route::get('/como-funciona', function () {
    return view('regras');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pixel-shop', function () {
    return view('pixel-shop');
});

Route::get('/historico', function () {
    return view('historico');
});

Route::get('/checkout', function () {
    return view('checkout');
});
