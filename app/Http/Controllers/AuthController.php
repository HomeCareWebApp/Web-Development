<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $infoLogin = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($infoLogin)){
            return 'Sukses';
        }
        else
        {
            return redirect('login');
        }
       
    }

    public function registerPage()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|unique:customers|email',
            'name' =>  'required',
            'phone' => 'required|numeric',
            'password' => 'required|min:8',
            'c_password' => 'required|min:8|same:password'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        $validateData['location'] = 'asd';
        $validateData['customerId'] = 'C0002';

        $userData['email'] = $request->email;
        $userData['password'] = bcrypt($request->password);


        Customer::create($validateData);

        User::create($userData);
    }
}
