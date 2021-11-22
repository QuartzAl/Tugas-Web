<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', function () {
    return view('content.home');
})->name('home');

Route::redirect('/', '/home');


Route::get('/product', [ProductController::class, 'index']) ->name('product');
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']) ->name('deleteProduct');
Route::get('/product/add', [ProductController::class, 'create']) ->name('addProduct');
Route::get('/product/store', [ProductController::class, 'store']) ->name('storeProduct');


Route::get('/category', [CategoriesController::class, 'index']) ->name('categories');
Route::get('/category/delete/{id}', [CategoriesController::class, 'destroy']) ->name('deleteCategory');
Route::get('/category/add', [CategoriesController::class, 'create']) ->name('addCategory');
