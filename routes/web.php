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

// PPID - Menu Utama
Route::get('/ppid/profil', function () {
    return view('ppid.ppid-profil');
});

Route::get('/ppid/tugas-fungsi', function () {
    return view('ppid.ppid-tugas-fungsi');
});

Route::get('/ppid/visi-misi', function () {
    return view('ppid.ppid-visi-misi');
});

Route::get('/ppid/regulasi', function () {
    return view('ppid.ppid-regulasi');
});

Route::get('/ppid/kontak', function () {
    return view('ppid.ppid-kontak');
});

// PPID - Informasi Publik
Route::get('/ppid/informasi-berkala', function () {
    return view('ppid.ppid-informasi-berkala');
});

Route::get('/ppid/informasi-serta-merta', function () {
    return view('ppid.ppid-informasi-serta-merta');
});

Route::get('/ppid/informasi-setiap-saat', function () {
    return view('ppid.ppid-informasi-setiap-saat');
});

Route::get('/ppid/informasi-dikecualikan', function () {
    return view('ppid.ppid-informasi-dikecualikan');
});

// PPID - Layanan Informasi
Route::get('/ppid/maklumat-pelayanan', function () {
    return view('ppid.ppid-maklumat-pelayanan');
});

Route::get('/ppid/prosedur-permohonan-informasi', function () {
    return view('ppid.ppid-prosedur-permohonan-informasi');
});

Route::get('/ppid/prosedur-keberatan', function () {
    return view('ppid.ppid-prosedur-keberatan');
});

Route::get('/ppid/prosedur-sengketa', function () {
    return view('ppid.ppid-prosedur-sengketa');
});

Route::get('/ppid/laporan-layanan', function () {
    return view('ppid.ppid-laporan-layanan');
});

Route::get('/ppid/formulir-permohonan', function () {
    return view('ppid.ppid-formulir-permohonan');
});

Route::get('/ppid/formulir-keberatan', function () {
    return view('ppid.ppid-formulir-keberatan');
});
