<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::get('/sign_up', [AuthController::class, 'sign_up'])->middleware('guest');
Route::post('/registration', [AuthController::class, 'registration'])->middleware('guest');
Route::post('/', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('product', ProductController::class)->middleware('auth');