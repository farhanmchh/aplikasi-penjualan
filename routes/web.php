<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\Purchase_itemsController;


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
Route::post('/', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/menu/form/{mode}', [MenuController::class, 'form'])->middleware('auth');
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/orders', [OrdersController::class, 'index'])->middleware('auth');
Route::get('/products', [ProductsController::class, 'index'])->middleware('auth');
Route::get('/suppliers', [SuppliersController::class, 'index'])->middleware('auth');
Route::get('/purchases', [PurchasesController::class, 'index'])->middleware('auth');
Route::get('/purchase_items', [Purchase_itemsController::class, 'index'])->middleware('auth');
Route::get('/menu/form/{mode}/{id?}', [MenuController::class, 'form'])->middleware('auth');
Route::get('/user/form/{mode}/{id?}', [UserController::class, 'form'])->middleware('auth');
Route::post('/menu/save', [MenuController::class, 'save'])->middleware('auth');
Route::post('/user/save', [UserController::class, 'save'])->middleware('auth');
Route::post('/menu/delete', [MenuController::class, 'delete'])->middleware('auth');
Route::post('/user/delete', [UserController::class, 'delete'])->middleware('auth');
