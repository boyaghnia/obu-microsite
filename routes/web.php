<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
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

