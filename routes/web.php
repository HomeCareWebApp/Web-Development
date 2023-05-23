<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TechnicianController;
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

Route::get('/', [CustomerController::class, 'home']);

Route::get('/login', [CustomerController::class, 'login']);

Route::get('/register', [CustomerController::class, 'register']);

Route::get('/service', [CustomerController::class, 'service']);

Route::get('/technician', [CustomerController::class, 'technician']);

Route::get('/order', [CustomerController::class, 'order']);

Route::get('/viewOrder', [TechnicianController::class, 'viewOrder']);

Route::get('/orderDetail', [TechnicianController::class, 'orderDetail']);

Route::get('/orderHistory', [TechnicianController::class, 'orderHistory']);

Route::get('/orderHistoryDetail', [TechnicianController::class, 'orderHistoryDetail']);


// Route::get('/')