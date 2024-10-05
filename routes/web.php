<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda', ['title' => 'Beranda']);
});

Route::get('/permintaan surat', function () {
    return view('permintaan surat', ['title' => 'Permintaan Surat']);
});

Route::get('/data iuran', function () {
    return view('data iuran', ['title' => 'Data iuran']);
});

Route::get('/laporan', function () {
    return view('laporan', ['title' => 'Laporan']);
});

Route::get('/list iuran', function () {
    return view('list iuran', ['title' => 'List iuran']);
});

Route::get('/ganti pass', function () {
    return view('ganti pass', ['title' => 'Ganti Password']);
});

Route::get('/daftar surat', function () {
    return view('daftar surat', ['title' => 'Daftar Surat']);
});