<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Technician;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $id = $cust->customerId;

        // $technician = DB::table('technicians')->where('category', $name)->
        // where('location', $loc)->paginate(5);

        $technician = DB::table('technicians')->where('category', $name)->
        where('location', $loc)->get();

        $order = DB::table('orders')->where('customerId', $id)->
        where('status', 'requested')->orWhere('status','accepted')->get();

        $otId = [];
        $tId = [];

        foreach($order as $o)
        {
            array_push($otId, $o->technicianId);
        }

        foreach($technician as $t)
        {
            array_push($tId, $t->technicianId);
        }

        $diff = array_diff($tId, $otId);

        // dd($tId);
        // dd($otId);

        $techList = [];

        // dd($diff);

        foreach ($technician as $data) {
            foreach ($diff as $item) {
                if($data->technicianId == $item) array_push($techList, $data);
            }
        }

        // for($i = 0 ; $i < sizeof($technician) ; $i++)
        // {
        //     for($j = 0 ; $j < sizeof($diff) ; $j++)
        //     {
        //         if($technician[$i]->technicianId == $diff[1])
        //         {
        //             array_push($techList, $technician[$i]);
        //         }
        //     }
        // }


        // print_r(collect($techList));
       
        $tl = $this->paginate($techList);
        $tl->withPath($name);

        return view('customer/chooseTechnician', [
            'servName' => $name,
            'technician' => $tl
        ]);

        // return $diff;

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
        
        date_default_timezone_set('Asia/Jakarta');

        $validateData['orderId'] = $newId;
        $validateData['service'] = $request->service;
        $validateData['orderDate'] = date("Y-m-d H:i:s");
        $validateData['status'] = 'requested';
        $validateData['technicianId'] = $request->technician;
        $validateData['rated'] = 0;
        $validateData['rating'] = 0.00;
        
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
        $order = DB::table('orders')->join('technicians', 'orders.technicianId','=','technicians.technicianId')
        ->where('orderId',$id)->first();

        return view('customer/orderDetail',[
            'order' => $order
        ]);
        // return $order;
    }

    public function ratingPage(Request $request)
    {
        $orderId = $request->orderId;

        $orders = Order::selectRaw('service,name,orderId')->leftJoin('technicians','orders.technicianId','technicians.technicianId')->where('orderId',$orderId)->first();

        return view('rating',[
            'orders' => $orders
        ]);
    }

    public function rateTechnician(Request $request)
    {
        $rating = doubleval($request->rating);
        $checkIfRated = Order::select('rated')->where('orderId',$request->orderId)->first()->rated;
        if($checkIfRated == 0) {
            DB::table('orders')
                ->where('orderId',$request->orderId)
                ->update(array(
                    'rating' => $rating,
                    'rated' => 1
                ));

            return redirect()->route('orderHistoryCust');
        } 

        return redirect()->back()->withErrors('Anda telah memberikan rating sebelumnya');
    }

    public function cancel(String $id)
    {
       
        DB::table('orders')->where('orderId',$id)->update(['status' => 'canceled']);

        return redirect('/myOrder')->with('success','Order anda telah dibatalkan');
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

    public static function paginate($items, $perPage = 5, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        
        return new LengthAwarePaginator($itemstoshow ,$total   ,$perPage);
    }
    

    
    


}
