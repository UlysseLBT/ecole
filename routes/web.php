<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/etudiants', function () {
    return view('etudiants');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});