<link rel="stylesheet" href="{{ asset('css/orderDetail.css') }}">

@extends('layout.template')

@section('title','Order Detail')

@section('content')

<div class="content">

    <div class="judull">Order Detail</div>
    <div class="line"></div>
    <div class="descCont">
        <div class="desc">
            <div class="kata">Service</div>
            <div> : {{ $order->service }}</div>
        </div> 
        <div class="desc">
            <div class="kata">Technician</div>
            <div> : {{ $order->name }}</div>
        </div>
        <div>
            <div class="desc">
                <div class="kata">Address</div>
                <div> : </div>
            </div>
            <div>{{ $order->address }}</div>

        </div>
        <div>
            <div class="desc">
                <div class="kata">Description</div>
                <div>: </div>
            </div>
            <div>{{ $order->description }}</div>
        </div>
       
        <div class="d-flex justify-content-end">
            <a href="/" class="btn btnAcc">Cancel</a>
        </div>
      
    </div>
   
</div>

@endsection