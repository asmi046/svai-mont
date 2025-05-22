<?php

use App\Http\Middleware\IssetCity;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CertificatController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

Route::middleware(IssetCity::class)->group( function() {
    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/certificat', [CertificatController::class, "index"])->name('certificat');

    Route::get('/products', [ProductController::class, "index"])->name('products');
    Route::get('/products/{slug}', [ProductController::class, "page"])->name('product_page');

    Route::get('/services', [ServiceController::class, "index"])->name('services');
    Route::get('/services/{slug}', [ServiceController::class, "page"])->name('service_page');

    Route::get('/fondations', [FondationController::class, "index"])->name('fondations');
    Route::get('/fondations/{slug}', [FondationController::class, "page"])->name('fondation_page');

    Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');
});



