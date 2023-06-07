<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'loginPage'])->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/register', [AuthController::class, 'registerPage'])->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/registerTechnician', [AuthController::class, 'registerTechPage'])->middleware('guest');

Route::post('/registerTechnician', [AuthController::class, 'registerTech'])->middleware('guest');

Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');

Route::get('/service', [CustomerController::class, 'service'])->middleware('auth')->middleware('customer');

Route::get('/service/{name}', [CustomerController::class, 'chooseService']);

// Route::get('/technician', [CustomerController::class, 'technician']);

Route::get('/myOrderDetail/{id}', [CustomerController::class, 'orderDetail']);

Route::get('/technician/{id}', [CustomerController::class, 'chooseTechnician']);

Route::get('/order', [CustomerController::class, 'orderPage']);

Route::post('/order', [CustomerController::class, 'order']);

Route::get('/cancel/{id}', [CustomerController::class, 'cancel']);

Route::get('/myOrder', [CustomerController::class, 'myOrder']);

Route::get('/myOrder/onGoing', [CustomerController::class, 'onGoing']);

Route::get('/viewOrder', [TechnicianController::class, 'viewOrder']);

Route::get('/orderDetail/{id}', [TechnicianController::class, 'orderDetail']);

Route::get('/order/onGoing', [TechnicianController::class, 'onGoing']);

Route::get('/accept/{id}', [TechnicianController::class, 'accept']);

Route::get('/complete/{id}', [TechnicianController::class, 'complete']);

Route::get('/profile/{id}', [TechnicianController::class, 'viewProfile']);

Route::get('/changeProfile/{id}', [TechnicianController::class, 'changeProfile']);

Route::post('/saveChange', [TechnicianController::class, 'saveChange']);

Route::post('/changePicture', [TechnicianController::class, 'changePicture']);

Route::get('/orderHistory', [TechnicianController::class, 'orderHistory']);

Route::get('/orderHistoryDetail', [TechnicianController::class, 'orderHistoryDetail']);


// Route::get('/')