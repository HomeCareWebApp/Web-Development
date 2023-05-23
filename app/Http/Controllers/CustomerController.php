<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function service()
    {
        return view('service');
    }

    public function technician()
    {
        return view('chooseTechnician');
    }

    public function order()
    {
        return view('order');
    }

    
    


}
