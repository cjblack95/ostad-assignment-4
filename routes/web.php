<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('products');

//Route::get('/products/{id},[App\Http\Controllers\ProductController::class,'show'])->name('products.show');
Route::get('/products/{id}/show',[App\Http\Controllers\ProductController::class,'show'])->name('products.show');

Route::get('/products/{id}/edit',[App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{id}',[App\Http\Controllers\ProductController::class,'update'])->name('products.update');
Route::get('/products/sort_by/name',[App\Http\Controllers\ProductController::class,'sortByName'])->name('products.sort_by_name');
Route::get('/products/sort_by/price',[App\Http\Controllers\ProductController::class,'sortByPrice'])->name('products.sort_by_price');
Route::post('/products/sort_by/search',[App\Http\Controllers\ProductController::class,'search'])->name('products.search');
Route::get('/products/create',[App\Http\Controllers\ProductController::class,'create'])->name('products.create');
Route::post('/products',[App\Http\Controllers\ProductController::class,'store'])->name('products.store');
Route::delete('/products/{id}',[App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
