<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Language switcher route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/expotur-2026', function () {
    return view('expotur-2026');
})->name('expotur.2026');

Route::get('/sellers-info', function () {
    return view('sellers-info');
})->name('sellers.info');

Route::get('/be-a-buyer', function () {
    return view('be-a-buyer');
})->name('buyer');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');
