<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// USER CONTROLLER
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/{product_id}',[UserController::class,'show'])->name('user.show');

// ADMIN CONTROLLER
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/{user_id}', [AdminController::class, 'show'])->name('admin.show');
Route::get('/admin/{user_id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::PATCH('/admin/{user_id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{user_id}', [AdminController::class, 'destroy'])->name('admin.destroy');

// PRODUCTS CONTROLLER
Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::post('/product', [ProductController::class,'store'])->name('product.store');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::get('/product/{product_id}',[ProductController::class,'show'])->name('product.show');
// Route::get('/product/{product_id}/edit', [ProductController::class, 'edit'])->name('product.edit');
// Route::PATCH('/product/{product_id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product_id}', [ProductController::class,'destroy'])->name('product.destroy');
