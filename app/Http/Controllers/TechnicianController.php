<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{
    public function viewOrder()
    {

        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;

        $data = DB::table('customers')->join('orders', 'customers.customerId','=', 'orders.customerId')
        ->where('technicianId',$id)->where('status','requested')->paginate(5);

        return view('technician/viewOrder',[
            'data' => $data
        ]);

        // return $id;
    }

    public function orderDetail(String $id)
    {
        $order = DB::table('orders')->join('customers', 'orders.customerId','=','customers.customerId')
        ->where('orderId',$id)->first();

       

        return view('technician/orderDetail',[
            'order' => $order
        ]);
        // return $order;
    }

    public function onGoing()
    {
        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;

        $data = DB::table('customers')->join('orders', 'customers.customerId','=', 'orders.customerId')
        ->where('technicianId',$id)->where('status','accepted')->paginate(5);

        return view('technician/onGoing',[
            'data' => $data
        ]);
    }

    public function accept(String $id)
    {
        DB::table('orders')->where('orderId', $id)->update(['status' => 'accepted']);

        return redirect('/order/onGoing');
    }

    public function orderHistory()
    {
        return view('orderHistory');
    }

    public function orderHistoryDetail()
    {
        return view('orderHistoryDetail');
    }

    public function viewProfile(String $id)
    {
        $technician = DB::table('technicians')->where('technicianId',$id)->first();
        return view('technician/technicianProfile',[
            'technician' => $technician
        ]);
    }

    public function changeProfile(String $id)
    {
        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;

        $technician = DB::table('technicians')->where('technicianId',$id)->first();

        return view('technician/changeProfile',[
            'technician' => $technician,
            'id' => $id
        ]);

    }


    public function changePicture(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:1024|',
        ]);

        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;
     
        $request->image->move(public_path('techImg'), $id.".png");

        DB::table('technicians')->where('technicianId',$id)->update(['profilePicture' => $id]);

        return back();


    }

    public function saveChange(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'age'  => 'required|numeric',
            'location' => 'required',
            'experience' => 'required'
        ]);
    }

}
