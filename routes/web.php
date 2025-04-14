<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});
Route::get('/etudiants', function () {
    return view('etudiants');
});
