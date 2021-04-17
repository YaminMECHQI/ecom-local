<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;

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
});

Route::get('/commande', [CommandeController::class,'index']);

Route::get('/products', [ProductController::class,'index']);
Route::get('/products/create', [ProductController::class,'create']);
Route::post('/products/store', [ProductController::class,'store']);
Route::get('/products/{id}/edit', [ProductController::class,'edit']);
Route::put('/products/{id}/update', [ProductController::class,'update']);
Route::get('/products/{id}', [ProductController::class,'show']);
Route::delete('/products/{id}', [ProductController::class,'delete']);

Route::resource('/categories',CategoryController::class);
Route::resource('/users',UserController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
