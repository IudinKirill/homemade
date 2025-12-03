<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/country',[CountryController::class, 'index'])->name('country.index');

Route::get('/category',[CategoryController::class, 'index'])->name('category.index');

Route::post('login', [FormController::class, 'login'])->name('login');
