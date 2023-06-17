<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Technician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

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
            'data' => $data,
            'id' => $id
        ]);

        // return $id;
    }

    public function orderDetail(String $id)
    {

        
        $order = DB::table('orders')->join('customers', 'orders.customerId','=','customers.customerId')
        ->where('orderId',$id)->first();
        
        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId;
       

        return view('technician/orderDetail',[
            'order' => $order,
            'id' => $id
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
            'data' => $data,
            'id' => $id
        ]);
    }

    public function accept(String $id)
    {
        DB::table('orders')->where('orderId', $id)->update(['status' => 'accepted']);

        return redirect('/order/onGoing');
    }

    public function complete(String $id)
    {
        DB::table('orders')->where('orderId', $id)->update(['status' => 'completed']);

        return redirect()->route('orderHistoryTech');
    }

    public function orderHistory()
    {
        $email = Auth::user()->email;
        
        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;
        
        $completedData = DB::table('orders')->where('technicianId',$id)->where('status','completed')->paginate(5);
        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId;
        
        return view('orderHistory',[
            'completed' => $completedData,
            'id' => $id
        ]);
    }

    public function orderHistoryDetail()
    {
        return view('orderHistoryDetail');
    }

    public function viewProfile(Request $request)
    {
        $user = Auth::user();
        if($request->id == null){
            $id = Technician::select('technicianId')->where('email',$user->email)->first()->technicianId;
        } else $id = $request->id;
        $technician = DB::table('technicians')->where('technicianId',$id)->first();
        $rating = Order::select('rating')->where('technicianId',$id)->where('rated',1)->get();

        $temp = 0;
        foreach ($rating as $data) {
            $temp += $data->rating;
        }
        $counter = Order::selectRaw('count(rating) as counter')->where('technicianId',$id)->where('rated',1)->groupBy('technicianId')->first();
        
        if($counter == null){
            $newRating = 0;
            $count = 0;
        }
        else {
            $counter = $count = $counter->counter;
            $newRating = $temp / $count;
        }

        return view('technician/technicianProfile',[
            'technician' => $technician,
            'rating'=>$newRating,
            'count' =>$count
        ]);
    }

    public function changeProfile(String $id)
    {
        

        $technician = DB::table('technicians')->where('technicianId',$id)->first();

        return view('technician/changeProfile',[
            'technician' => $technician,
            'id' => $id
        ]);

        // return $technician;

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

        session()->flash('picture', 'Successfully change profile picture');

        return redirect('/changeProfile'.'/'.$id);


    }

    public function saveChange(Request $request)
    {

       
        $request->validate([
            'name' => 'required|max:50',
            'location' => 'required',
            'experience' => 'required'
        ]);

        $email = Auth::user()->email;

        $tech = DB::table('technicians')->where('email',$email)->first();
        $id = $tech->technicianId ;

        DB::table('technicians')->where('technicianId', $id)
        ->update(['name' => $request->name, 
        'location' => $request->location, 
        'experience' => $request->experience]);

        DB::table('users')->where('email', $tech->email)->update(['name' => $request->name]);

        session()->flash('change','Successfully change profile');

        return redirect('/changeProfile'.'/'.$id);
    }

}
