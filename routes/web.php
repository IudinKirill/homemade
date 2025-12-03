<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/country',[CountryController::class, 'index'])->name('country.index');

Route::get('/page2', function () {
    return view('page2');
})->name('page2');

Route::post('login', [FormController::class, 'login'])->name('login');
