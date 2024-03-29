<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RatingController;
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

Route::get('/', [CustomerController::class, 'home'])->middleware('guestandcust');

Route::get('/login', [AuthController::class, 'loginPage'])->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/register', [AuthController::class, 'registerPage'])->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/registerTechnician', [AuthController::class, 'registerTechPage'])->middleware('guest');

Route::post('/registerTechnician', [AuthController::class, 'registerTech'])->middleware('guest');

Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');

Route::get('/service', [CustomerController::class, 'service'])->middleware('auth')->middleware('customer');

Route::get('/service/{name}', [CustomerController::class, 'chooseService']);

Route::get('/rating', [CustomerController::class, 'ratingPage'])->middleware('auth')->middleware('customer');

Route::post('/rate', [CustomerController::class, 'rateTechnician'])->middleware('auth')->middleware('customer');
// Route::get('/technician', [CustomerController::class, 'technician']);

Route::get('/myOrderDetail/{id}', [CustomerController::class, 'orderDetail'])->middleware('auth')->middleware('customer');

Route::get('/technician/{id}', [CustomerController::class, 'chooseTechnician'])->middleware('auth')->middleware('customer');

Route::get('/order', [CustomerController::class, 'orderPage'])->middleware('auth')->middleware('customer');

Route::post('/order', [CustomerController::class, 'order'])->middleware('auth')->middleware('customer');

Route::get('/cancel/{id}', [CustomerController::class, 'cancel'])->middleware('auth')->middleware('customer');

Route::get('/myOrder', [CustomerController::class, 'myOrder'])->middleware('auth')->middleware('customer');

Route::get('/myOrder/onGoing', [CustomerController::class, 'onGoing'])->middleware('auth')->middleware('customer');

Route::get('/viewOrder', [TechnicianController::class, 'viewOrder'])->middleware('auth')->middleware('technician');

Route::get('/orderDetail/{id}', [TechnicianController::class, 'orderDetail'])->middleware('auth')->middleware('technician');

Route::get('/order/onGoing', [TechnicianController::class, 'onGoing'])->middleware('auth')->middleware('technician');

Route::get('/accept/{id}', [TechnicianController::class, 'accept'])->middleware('auth')->middleware('technician');

Route::get('/complete/{id}', [TechnicianController::class, 'complete'])->middleware('auth')->middleware('technician');

Route::get('/profile/{id}', [TechnicianController::class, 'viewProfile'])->middleware('auth');

Route::get('/changeProfile/{id}', [TechnicianController::class, 'changeProfile'])->middleware('auth')->middleware('technician');;

Route::post('/saveChange', [TechnicianController::class, 'saveChange'])->middleware('auth')->middleware('technician');;

Route::post('/changePicture', [TechnicianController::class, 'changePicture'])->middleware('auth')->middleware('technician');;

Route::get('/orderHistoryCust', [CustomerController::class, 'orderHistoryCust'])->middleware('auth')->middleware('customer')->name('orderHistoryCust');

Route::get('/orderHistoryTech', [TechnicianController::class, 'orderHistory'])->middleware('auth')->middleware('technician')->name('orderHistoryTech');

Route::get('/orderHistoryDetail/{id}', [TechnicianController::class, 'orderHistoryDetail'])->middleware('auth')->middleware('technician');;


// Route::get('/')