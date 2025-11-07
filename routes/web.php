<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil/sejarah', function () {
    return view('sejarah');
});

Route::get('/profil/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/profil/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/profil/tugas-fungsi', function () {
    return view('tugas-fungsi');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita-detail', function () {
    return view('berita-detail');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/galeri/album', function () {
    return view('galeri-album');
});

Route::get('/ppid', function () {
    return view('ppid');
});
