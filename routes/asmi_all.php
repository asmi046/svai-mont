<?php

use App\Http\Controllers\ReviewController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');

