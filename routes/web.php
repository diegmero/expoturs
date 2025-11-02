<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/expotur-2026', function () {
    return view('expotur-2026');
})->name('expotur.2026');

Route::get('/sellers-info', function () {
    return view('sellers-info');
})->name('sellers.info');

Route::get('/be-a-buyer', function () {
    return view('index');
})->name('buyer');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');
