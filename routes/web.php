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

Route::get('/npm', function () {
    echo '<h1>NPM</h1>';
    echo '<p>NPM : G1A020007</p>';
});

Route::get('/kelas', function () {
    echo '<h1>Kelas</h1>';
    echo '<p>Kelas : Informatika A</p>';
});

Route::get('/prodi', function () {
    echo '<h1>Prodi</h1>';
    echo '<p>Prodi : Teknik</p>';
});

Route::get('/jurusan', function () {
    echo '<h1>Jurusan</h1>';
    echo '<p>Jurusan : Informatika</p>';
});

Route::get('/universitas', function () {
    echo '<h1>Universitas</h1>';
    echo '<p>Universitas : Universitas Bengkulu</p>';
});

Route::get('/tanggal-lahir', function () {
    echo '<h1>Tanggal Lahir</h1>';
    echo '<p>Tanggal Lahir : 4 April 2002</p>';
});

Route::get('/alamat', function () {
    echo '<h1>Alamat</h1>';
    echo '<p>Alamat : Jalan Basuki Rahmat 1, Rt 8, Rw 2, Sukamerindu, Kota Bengkulu</p>';
});


