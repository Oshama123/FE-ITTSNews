<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.index');
});

Route::get('/pendaftaran', function () {
    return view('home.form');
});

Route::get('/absen', function () {
    return view('home.presence');
});

Route::get('/sertifikasi', function () {
    return view('home.sertification');
});