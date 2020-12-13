<?php
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductExport;
Route::get('/', function () {
    return view('layouts.index-master');
});


Route::get('/users', [HomeController::class, 'users']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/users_product', [HomeController::class, 'users_product']);

/**
 * Product İşlemleri
 */
Route::get('/create-products', [ProductController::class, 'create'])->name('product.create');
Route::post('/save-product', [ProductController::class, 'store'])->name('product.save');
Route::get('/show-products', [ProductController::class, 'index'])->name('product.index');
Route::get('/export-product', [ProductController::class, 'export'])->name('product.export');


//blog
Route::get('/blog', [BlogController::class, 'blog']);
//banner
Route::get('/banner', [BannerController::class, 'banner']);
//latests
Route::get('/latest', [BannerController::class, 'latest']);

Route::get('/kategori', [BannerController::class, 'category']);

