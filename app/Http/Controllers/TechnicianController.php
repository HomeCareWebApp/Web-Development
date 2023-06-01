<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{
    public function viewOrder()
    {

        $data = DB::table('customers')->join('orders', 'customers.customerId','=', 'orders.customerId')
        ->where('technicianId','T0001')->where('status','requested')->paginate(5);

        return view('viewOrder',[
            'data' => $data
        ]);

        // return $data;
    }

    public function orderDetail(String $id)
    {
        $order = DB::table('orders')->join('customers', 'orders.customerId','=','customers.customerId')
        ->where('orderId',$id)->first();

        return view('orderDetail',[
            'order' => $order
        ]);
    }

    public function accept(String $id)
    {
        DB::table('orders')->where('orderId', $id)->update(['status' => 'accepted']);

        return redirect('/');
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
        return view('technicianProfile',[
            'technician' => $technician
        ]);
    }

}
