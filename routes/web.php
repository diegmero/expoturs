<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/expotur-2026', function () {
    return view('expotur-2026');
})->name('expotur.2026');
