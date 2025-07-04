<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


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

Route::get('products', [ProductController::class, 'index']);
Route::get('products/register', [ProductController::class, 'create']);
Route::post('products/register', [ProductController::class, 'store']);
Route::get('products/{productId}', [ProductController::class, 'show'])->name('products.show');
Route::patch('products/{productId}/update', [ProductController::class, 'update']);
Route::get('products/{productId}/delete', [ProductController::class, 'destroy']);
Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
