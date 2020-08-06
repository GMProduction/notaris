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

Route::get(
    '/',
    function () {
        return view('home');
    }
);

Route::get(
    '/login',
    function () {
        return view('login.login');
    }
);

Route::get(
    '/admin',
    function () {
        return view('admin/dashboard');
    }
);

Route::get('/admin/pemohon', function () {
    return view('admin.pemohon.pemohon');
});

Route::get('/admin/tambahpemohon', function () {
    return view('admin.pemohon.tambahpemohon');
});

Route::get('/admin/detailpemohon', function () {
    return view('admin.pemohon.detailpemohon');
});

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

Route::get('/admin/tambahuser', function () {
    return view('admin.user.tambahuser');
});


Route::get('/admin/permohonan', function () {
    return view('admin.permohonan.permohonan');
});

Route::get('/admin/tambahpermohonan', function () {
    return view('admin.permohonan.tambahpermohonan');
});

Route::get('/admin/detailpermohonan', function () {
    return view('admin.permohonan.detailpermohonan');
});

Route::get('/admin/tambahukur', function () {
    return view('admin.permohonan.tambahukur');
});
//Route::get('/admin/pemohon', 'Admin\PemohonController@index');

Route::get('/admin/pemohon/cetak', 'LaporanController@cetakAdminDataPemohon')->name('admindatapemohoncetak');
Route::get('/admin/permohonan/cetak', 'LaporanController@cetakAdminDataPermohonan')->name('cetakAdminDataPermohonan');


Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/postlogin', 'Auth\AuthController@login');

Route::get('/detail', function () {
    return view('detail');
});

