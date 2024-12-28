<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
route::get('transaction/information/{slug}',[TransactionController::class, 'information'])->name('transaction.information');
Route::post('/transaction/save', [TransactionController::class, 'saveInformation'])->name('transaction.save');
Route::get('/transaction/success', [TransactionController::class, 'success'])->name('transaction.success');
