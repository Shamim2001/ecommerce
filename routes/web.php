<?php

use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;


// Frontend
Route::group(['frontend/'], function () {
    Route::get('/', [HomeController::class, 'index']);
});


// Backend
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
