<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

// Phần login + register

Route::prefix('login')->name('login.')->group(function() {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    
    
});

//Phần user_admin

Route::prefix('user')->name('user.')->group(function () {
    
    Route::get('/', [UserController::class, 'index'])->name('list');
    Route::get('/add', [UserController::class, 'addUser'])->name('add');
    Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
    Route::post('/update', [UserController::class, 'postEdit'])->name('post-edit');
    Route::get('/delete/{id}',[UserController::class, 'delete'])->name('delete');


});

//phần sản phẩm


Route::prefix('product')->name('product.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('list');
    Route::get('/add', [ProductController::class, 'addProduct'])->name('add');
    Route::post('/add', [ProductController::class, 'postAdd'])->name('post-add');
});

//Phần danh mục
