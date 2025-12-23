<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('.auth'); 
})->name('auth');
Route::get('/dashboard', function () {
    return view('.dashboard'); 
})->name('dashboard');


Route::get('/main', function () {
    return view('main.main');
})->name('main');

Route::get('/main', function () {
    return view('main.main');
})->name('main');

Route::get('/transaksi', function () {
    return view('main.transaksi');
})->name('transaksi');

Route::get('/laporan-keuangan', function () {
    return view('main.laporan');
})->name('laporan');

Route::get('/prediksi-ai', function () {
    return view('main.prediksi');
})->name('prediksi');

Route::get('/stok-barang', function () {
    return view('main.stok');
})->name('stok');

Route::get('/analitik', function () {
    return view('main.analitik');
})->name('analitik');
