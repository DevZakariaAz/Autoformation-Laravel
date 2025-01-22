<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::resource('products' , ProductController::class)->withTrashed();
Route::post('/products/{id}/restore' , [ProductController::class , 'restore'])->name('products.restore');