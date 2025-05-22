<?php

use App\Http\Middleware\IssetCity;
use App\Http\Controllers\ReviewController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

// Route::domain('{city}.svai.local')->middleware(IssetCity::class)->group( function() {
Route::middleware(IssetCity::class)->group( function() {
    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');
});



