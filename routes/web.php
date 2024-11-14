<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('pages.product.index');
});



