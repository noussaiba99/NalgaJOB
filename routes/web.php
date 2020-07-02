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

Route::get('/register', function () {
    return view('registration/register');
});
Route::get('/recherche', function () {
    return view('user/recherche');
});
Route::get('/profil_free', function () {
    return view('user/profileFree');
});
Route::get('/profil_pro', function () {
    return view('user/profilePro');
});
Route::get('/login', function () {
    return view('/registration/login');
});
