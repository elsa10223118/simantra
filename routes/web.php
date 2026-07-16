<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahunController;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/pegawai', function () {
    return view('admin.pegawai.index');
});
Route::get('/pegawai/create', function () {
    return view('admin.pegawai.create');
});
Route::get('/mitra', function () {
    return view('admin.mitra.index');
});
Route::get('/mitra/create', function () {
    return view('admin.mitra.create');
});
Route::get('/mata-anggaran', function () {
    return view('admin.mata-anggaran.index');
});
Route::get('/mata-anggaran/create', function () {
    return view('admin.mata-anggaran.create');
});
Route::resource('tahun', TahunController::class)->only([
    'index',
    'create',
    'store'
]);

Route::get('/sbml', function () {
    return view('admin.sbml.index');
});
Route::get('/sbml/create', function () {
    return view('admin.sbml.create');
});
Route::get('/transaksi', function () {
    return view('admin.transaksi.index');
});
Route::get('/transaksi/create', function () {
    return view('admin.transaksi.create');
});
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
Route::get('/laporan', function () {
    return view('admin.laporan.index');
});