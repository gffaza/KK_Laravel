<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regis_controller;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/buat-cerita', function () {
    return view('buat_cerita');
});

Route::get('/kampus', function () {
    return view('kampus');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::post('/registrasi', [regis_controller::class, 'registrasi']);
