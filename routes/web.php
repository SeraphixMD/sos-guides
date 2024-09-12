<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::redirect('/', '/food-bible');

    Route::get('/food-bible', function () {
        return view('food-bible');
    })->name('food-bible');
});
