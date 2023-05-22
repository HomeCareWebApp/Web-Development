<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/technician', function () {
    return view('chooseTechnician');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/vieworder', function () {
    return view('viewOrder');
});

Route::get('/orderdetail', function () {
    return view('orderDetail');
});

Route::get('/orderHistory', function () {
    return view('orderHistory');
});

Route::get('/orderHistoryDetail', function () {
    return view('orderHistoryDetail');
});

// Route::get('/')