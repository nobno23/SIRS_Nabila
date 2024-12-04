<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/cabang', function () {
    return view('cabang');
});
Route::get('/dataPasien', function () {
    return view('dataPasien');
});
Route::get('/dataDokter', function () {
    return view('dataDokter');
});
Route::get('/dataPoliklinik', function () {
    return view('dataPoliklinik');
});
Route::get('/dataObat', function () {
    return view('dataObat');
});
Route::get('/rekamMedis', function () {
    return view('rekamMedis');
});
Route::get('/rekamMedis', function () {
    return view('rekamMedis');
});
Route::get('/login', function () {
    return view('login');
})->name("login");
Route::get('/register', function () {
    return view('register');
});
