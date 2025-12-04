<?php

use App\Http\Controllers\CountryController;
use App\Models\Category;
use App\Models\Country;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/country',[CountryController::class, 'index'])->name('country.index');

Route::get('/category',[CategoryController::class, 'index'])->name('category.index');

Route::patch('/country/{country}/top/increase', function (Country $country) {
    $country->increment('top');
    return back();
})->name('country.top.increase');

Route::patch('/country/{country}/top/decrease', function (Country $country) {
    $country->decrement('top');
    return back();
})->name('country.top.decrease');

Route::delete('/country/{country}', [CountryController::class, 'destroy'])->name('country.destroy');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::post('login', [FormController::class, 'login'])->name('login');
