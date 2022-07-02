<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.layouts.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
