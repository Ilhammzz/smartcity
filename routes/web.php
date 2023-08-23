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
    return view('admin_login');
});
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/homeadmin', function () {
    return view('admin_homepage');
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
Route::get('/suratpreview', function () {
    return view('admin_previewsurat');
});
Route::get('/suratacc', function () {
    return view('admin_accsurat');
});


///

Route::get('/pengajuan_diterima', function () {
    return view('pengajuan_diterima');
});
Route::get('/status_surat', function () {
    return view('status_surat');
});
