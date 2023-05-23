<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function viewOrder()
    {
        return view('viewOrder');
    }

    public function orderDetail()
    {
        return view('orderDetail');
    }

    public function orderHistory()
    {
        return view('orderHistory');
    }

    public function orderHistoryDetail()
    {
        return view('orderHistoryDetail');
    }

}
