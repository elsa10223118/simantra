<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard Admin
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| Pegawai
|--------------------------------------------------------------------------
*/

Route::resource('pegawai', PegawaiController::class)->only([
    'index',
    'create',
    'store',
    'edit',
    'update'
]);

/*
|--------------------------------------------------------------------------
| Mitra
|--------------------------------------------------------------------------
*/

Route::get('/mitra', function () {
    return view('admin.mitra.index');
});

Route::get('/mitra/create', function () {
    return view('admin.mitra.create');
});

Route::get('/mitra/edit', function () {
    return view('admin.mitra.edit');
});

/*
|--------------------------------------------------------------------------
| Mata Anggaran
|--------------------------------------------------------------------------
*/

Route::get('/mata-anggaran', function () {
    return view('admin.mata-anggaran.index');
});

Route::get('/mata-anggaran/create', function () {
    return view('admin.mata-anggaran.create');
});

Route::get('/mata-anggaran/edit', function () {
    return view('admin.mata-anggaran.edit');
});

/*
|--------------------------------------------------------------------------
| Tahun
|--------------------------------------------------------------------------
*/

Route::resource('tahun', TahunController::class)->only([
    'index',
    'create',
    'store'
]);


/*
|--------------------------------------------------------------------------
| SBML
|--------------------------------------------------------------------------
*/

Route::get('/sbml', function () {
    return view('admin.sbml.index');
});

Route::get('/sbml/create', function () {
    return view('admin.sbml.create');
});

/*
|--------------------------------------------------------------------------
| Transaksi
|--------------------------------------------------------------------------
*/

Route::get('/transaksi', function () {
    return view('admin.transaksi.index');
});

Route::get('/transaksi/create', function () {
    return view('admin.transaksi.create');
});

/*
|--------------------------------------------------------------------------
| Dashboard Operator
|--------------------------------------------------------------------------
*/

Route::get('/operator/dashboard', function () {
    return view('operator.dashboard');
});

Route::get('/operator/mitra', function () {
    return view('operator.mitra.index');
});

Route::get('/operator/transaksi', function () {
    return view('operator.transaksi.index');
});

Route::get('/operator/transaksi/create', function () {
    return view('operator.transaksi.create');
});

/*
|--------------------------------------------------------------------------
| Laporan
|--------------------------------------------------------------------------
*/

Route::get('/laporan', function () {
    return view('admin.laporan.index');
});