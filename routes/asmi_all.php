<?php

use App\Http\Middleware\IssetCity;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\PageController;

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

Route::middleware(IssetCity::class)->group( function() {
    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/certificat', [CertificatController::class, "index"])->name('certificat');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/faq', [FaqController::class, "index"])->name('faq');
    Route::get('/review', [ReviewController::class, "index"])->name('review');
    Route::get('/sales', [SalesController::class, "index"])->name('sales');
    Route::get('/galery', [GaleryController::class, "index"])->name('galery');
    Route::get('/price', [PriceController::class, "index"])->name('price');

    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

    Route::get('/products', [ProductController::class, "index"])->name('products');
    Route::get('/products/{slug}', [ProductController::class, "page"])->name('product_page');

    Route::get('/services', [ServiceController::class, "index"])->name('services');
    Route::get('/services/{slug}', [ServiceController::class, "page"])->name('service_page');

    Route::get('/fondations', [FondationController::class, "index"])->name('fondations');
    Route::get('/fondations/{slug}', [FondationController::class, "page"])->name('fondation_page');

    Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');
});



