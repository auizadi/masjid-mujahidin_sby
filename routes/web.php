<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('v_home-page');
});

Route::get('/kontak', function () {
    return view('kontak-page');
});

Route::get('/profil', function () {
    return view('v_profil-page');
});

Route::get('/bidang', function () {
    return view('v_bidang-page');
});

Route::get('/detailberita', function () {
    return view('v_detailberita-page');

});

Route::get('/profil', function () {
    return view('v_profil-page');
});

Route::get('/bidang', function () {
    return view('v_bidang-page');
});

Route::get('/detailberita', function () {
    return view('v_detailberita-page');
});
Route::get('/', function () {
    return view('v_home-page');
});

Route::get('/profil', function () {
    return view('profil-page');
});

Route::get('/bidang', function () {
    return view('v_bidang-page');
});

Route::get('/detailberita', function () {
    return view('v_detailberita-page');
});
Route::get('/berita', function () {
    return view('berita-page');
});

