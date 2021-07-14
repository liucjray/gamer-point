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
    return view('user.index');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/game', function () {
    return view('user.game');
});

Route::get('/join', function () {
    return view('user.join');
});

Route::get('/work', function () {
    return view('user.work');
});

Route::get('/contact', function () {
    return view('user.contact');
});


