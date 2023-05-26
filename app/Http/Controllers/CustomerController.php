<?php

namespace App\Http\Controllers;

use App\Models\Technician;
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
        $technician = Technician::paginate(5);
        // dd($technician);
        return view('chooseTechnician', compact('technician'));
    }

    public function order()
    {
        return view('order');
    }

    
    


}
