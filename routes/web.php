<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

$locales = config('app.supported_locales');
$localePattern = implode('|', $locales);

Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/', function () {
    $defaultLocale = config('app.locale');
    return view('layouts.redirect-locale', ['defaultLocale' => $defaultLocale]);
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => $localePattern]], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('product');
    Route::get('/profile', [ProductController::class, 'index'])->name('profile');
    Route::get('/about-us', [ProductController::class, 'index'])->name('about-us');
    Route::get('/favourites', [ProductController::class, 'index'])->name('favourites');
});
