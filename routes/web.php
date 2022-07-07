<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;


// Frontend
Route::group(['frontend/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
    Route::get('product/{slug}', [ProductController::class, 'show'])->name('product.show');
    Route::post('product/card', [ProductController::class, 'addToCart'])->name('cart.add');
    Route::get('product/card/view', [ProductController::class, 'viewCart'])->name('cart.view');
});


// Backend
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
