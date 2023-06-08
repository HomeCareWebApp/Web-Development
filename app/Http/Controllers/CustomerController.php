<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Technician;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('customer/service');
    }

    public function chooseService(String $name)
    {

        $email = Auth::user()->email;

        $cust = DB::table('customers')->where('email', $email)->first();
        $loc = $cust->location;

        $technician = DB::table('technicians')->where('category', $name)->
        where('location', $loc)->paginate(5);

        return view('customer/chooseTechnician', [
            'servName' => $name,
            'technician' => $technician
        ]);

    }
    // return $tech;
    
    public function chooseTechnician(String $id)
    {
        $tech = DB::table('technicians')->where('technicianId',$id)->first();
        
        return view ('customer/order',['technician' => $tech]);
    }
    
    // public function technician()
    // {
        //     $technician = Technician::paginate(5);
        //     // dd($technician);
        //     return view('chooseTechnician', compact('technician'));
        // }
        
        public function orderPage()
        {
            // $email = Auth::user()->email;
            
            // $cust = DB::table('customers')->where('email',$email)->first();
            // return $cust->customerId;
            return view('order');
        }
        
        public function order(Request $request)
    {
        $validateData = $request->validate([
            'address' => 'required',
            'description' =>  'required',
        ]);
        
        $last = DB::table('orders')->orderBy('orderId', 'DESC')->first();
        
        if($last == null)
        {
            $newId = 'ORD0001';
        }
        else
        {
            
            $lastId = $last->orderId;
            
            $sub = substr($lastId,3);
            
            $pad = str_pad($sub + 1, 4, '0', STR_PAD_LEFT);
            
            $newId = 'ORD'.$pad;
        }
        
        $validateData['orderId'] = $newId;
        $validateData['service'] = $request->service;
        $validateData['orderDate'] = date("Y-m-d H:i:s");
        $validateData['status'] = 'requested';
        $validateData['technicianId'] = $request->technician;
        
        $email = Auth::user()->email;
        
        $cust = DB::table('customers')->where('email',$email)->first();
        $validateData['customerId'] = $cust->customerId ;
        
        Order::create($validateData);
        
        return redirect('/myOrder');
    }
    
    public function myOrder()
    {
        
        $email = Auth::user()->email;
        
        $cust = DB::table('customers')->where('email',$email)->first();
        $id = $cust->customerId ;
        
        $data = DB::table('technicians')->join('orders', 'technicians.technicianId','=', 'orders.technicianId')
        ->where('customerId',$id)->where('status','requested')->paginate(5);
        
        return view('customer/myOrder',[
            'data' => $data
        ]);
        
    }
    
    public function orderHistoryCust(Request $request)
    {

        $email = Auth::user()->email;
        
        $cust = DB::table('customers')->where('email',$email)->first();
        $id = $cust->customerId ;
        
        $completedData = DB::table('orders')->where('customerId',$id)->where('status','completed')->paginate(5);
        
        return view('orderHistory',[
            'completed' => $completedData
        ]);
        
    }

    public function orderDetail(String $id)
    {
        $order = DB::table('orders')->join('technicians', 'technicians.technicianId','=','technicians.technicianId')
        ->where('orderId',$id)->first();

        return view('customer/orderDetail',[
            'order' => $order
        ]);
        // return $order;
    }

    public function ratingPage(Request $request)
    {
        $orderId = $request->orderId;

        $orders = Order::selectRaw('service,name,orders.technicianId')->leftJoin('technicians','orders.technicianId','technicians.technicianId')->where('orderId',$orderId)->first();

        return view('rating',[
            'orders' => $orders
        ]);
    }

    public function rateTechnician(Request $request)
    {
        $currRating = Technician::select('rating')->where('technicianId',$request->technicianId)->first()->rating;
        $newRating = $request->rating;
        $counter = Technician::select('counter')->where('technicianId',$request->technicianId)->first()->counter;

        if($counter==0){
            $counter+=1;
            $rating = $newRating;
        }else {
            $rating = (($currRating * $counter) + $newRating) / ($counter+1);
            $counter+=1;
        }

        DB::table('technicians')
            ->where('technicianId',$request->technicianId)
            ->update(array(
                'rating' => $rating,
                'counter' => $counter
            ));

        return redirect()->back();
    }

    public function cancel(String $id)
    {
        DB::table('orders')->where('orderId', '=', $id)->delete();

        return redirect('/myOrder');
    }

    public function onGoing()
    {
        $email = Auth::user()->email;

        $cust = DB::table('customers')->where('email',$email)->first();
        $id = $cust->customerId ;

        $data = DB::table('technicians')->join('orders', 'technicians.technicianId','=', 'orders.technicianId')
        ->where('customerId',$id)->where('status','accepted')->paginate(5);

        return view('customer/onGoing',[
            'data' => $data,
            'id' => $id
        ]);
    }

    
    


}
