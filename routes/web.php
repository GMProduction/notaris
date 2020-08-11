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

Route::get('/admin/pemohon', 'Admin\PemohonController@index');
Route::get('/admin/pemohon/{id}', 'Admin\PemohonController@detail');
Route::post('/admin/pemohon/{id}', 'Admin\PemohonController@detail');
Route::get('/admin/tambahpemohon', 'Admin\PemohonController@addForm');
Route::post('/admin/tambahpemohon', 'Admin\PemohonController@add');

Route::get('/admin/user', 'Admin\UserController@index');

Route::get('/admin/tambahuser', function () {
    return view('admin.user.tambahuser');
});


Route::get('/admin/permohonan', 'Admin\PermohonanController@index');
Route::get('/admin/permohonan/{id}', 'Admin\PermohonanController@detail');
Route::get('/admin/permohonan/edit/{id}', 'Admin\PermohonanController@edit');
Route::post('/admin/permohonan/edit/{id}', 'Admin\PermohonanController@edit');
Route::get('/admin/tambahpermohonan', 'Admin\PermohonanController@addForm');
Route::post('/admin/permohonan/store', 'Admin\PermohonanController@add');
Route::post('/admin/permohonan/patchukur', 'Admin\PermohonanController@patchUkur');

Route::get('/admin/detailpermohonan', function () {
    return view('admin.permohonan.detailpermohonan');
});

//Route::get('/admin/pemohon', 'Admin\PemohonController@index');

Route::get('/admin/pemohon/cetak/{id}', 'LaporanController@cetakAdminDataPemohon')->name('admindatapemohoncetak');
Route::get('/admin/permohonan/cetak/{id}', 'LaporanController@cetakAdminDataPermohonan')->name('cetakAdminDataPermohonan');


Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/postlogin', 'Auth\AuthController@login');

Route::get('/detail', function () {
    return view('detail');
});

