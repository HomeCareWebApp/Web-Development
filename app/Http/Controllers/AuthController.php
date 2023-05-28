<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

            session()->regenerate();
            return redirect()->intended('/');
        }
       
        return back()->with('errorLogin', 'Invalid Username or Password');
       
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

        $last = DB::table('customers')->orderBy('customerId', 'DESC')->first();

        if($last == null)
        {
            $newId = 'C0001';
        }
        else
        {

            $lastId = $last->customerId;
    
            $sub = substr($lastId,2);
    
            $pad = str_pad($sub + 1, 4, '0', STR_PAD_LEFT);
    
            $newId = 'C'.$pad;
        }


        $validateData['password'] = bcrypt($validateData['password']);

        $validateData['location'] = 'asd';
        $validateData['customerId'] = $newId;

        $userData['email'] = $request->email;
        $userData['password'] = bcrypt($request->password);
        $userData['name'] = $request->name;


        Customer::create($validateData);

        User::create($userData);

        session()->flash('success','Registration Successfull! Please login');
    
        return redirect('register');
    }

    public function logout()
    {
        Auth::logout();
 
        session()->invalidate();
    
        session()->regenerateToken();
    
        return redirect('/');
    }
}
