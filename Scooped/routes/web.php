<?php

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
    return view('template');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/ride', function () {
    return view('ride');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/login', function () {
    return view('login');
});
