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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('template');
});
*/

Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});
Route::get('tentangkami', function () {
    return view('tentangkami');
});
Route::get('portofolio', function () {
    return view('portofolio');
});
Route::get('jasa', function () {
    return view('jasa');
});
Route::get('lowongan', function () {
    return view('lowongan');
});
Route::get('kontak', function () {
    return view('kontak');
});
