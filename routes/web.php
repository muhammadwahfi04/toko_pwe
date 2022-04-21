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

Route::get('/pemrograman-web', function () {
    echo '<h1>Pemrograman Web</h1>';
});

Route::get('/framework', function () {
    echo '<h1>Framework Laravel</h1>';
});

Route::get('/nama-lengkap', function () {
    echo '<h1>Nama Lengkap</h1>';
    echo '<p>Nama : Muhammad Wahfi Udin</p>';
});
