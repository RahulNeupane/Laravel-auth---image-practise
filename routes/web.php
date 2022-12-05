<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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


Route::get('product-list', [ProductController::class, 'productList']);

Route::get('add-product', [ProductController::class, 'addProduct']);

Route::post('save-product', [ProductController::class, 'saveProduct']);

Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);

Route::post('update-product', [ProductController::class, 'updateProduct']);

Route::get('delete-product/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');

