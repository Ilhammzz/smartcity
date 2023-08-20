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
    return view('welcome');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/adminlogin', function () {
    return view('login_admin');
});
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/homeadmin', function () {
    return view('homepage_admin');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/suratkehilangan', function () {
    return view('surat_kehilangan');
});
Route::get('/suratdone', function () {
    return view('surat_sukses');
});
Route::get('/suratmasuk', function () {
    return view('admin_suratmasuk');
});
Route::get('/suratambil', function () {
    return view('admin_suratambil');
});