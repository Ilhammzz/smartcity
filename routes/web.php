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
Route::get('/surat_ditolak', function () {
    return view('admin_surat_ditolak');
});
Route::get('/surattolak', function () {
    return view('admin_surattolak');
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
Route::get('/suratmasuk_surat', function () {
    return view('admin_suratmasuk_surat');
});
Route::get('/suratambil', function () {
    return view('admin_suratambil');
});
Route::get('/suratpreview', function () {
    return view('admin_previewsurat');
});
Route::get('/previewnotif', function () {
    return view('admin_previewsurat_notif');
});
Route::get('/suratacc', function () {
    return view('admin_accsurat');
});


///

Route::get('/pengajuan_diterima', function () {
    return view('admin_pengajuan_diterima');
});
Route::get('/surat_jenis_ready_print', function () {
    return view('admin_surat_jenis_ready_print');
});
Route::get('/surat_ready_print', function () {
    return view('admin_surat_ready_print');
});
Route::get('/status_surat', function () {
    return view('status_surat');
});
