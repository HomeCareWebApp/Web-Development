<link rel="stylesheet" href="{{ asset('css/technician/orderDetail.css') }}">

@extends('layout.template')

@section('title','Order Detail')

@section('content')

<div class="content">

    <div class="judull">Order Detail</div>
    <div class="line"></div>
    <div class="descCont">
        <div class="desc">
            <div class="kata">Service</div>
            <div> : </div>
            <div class="isi">{{ $order->service }}</div>
        </div> 
        <div class="desc">
            <div class="kata">Customer</div>
            <div> : </div>
            <div class="isi">{{ $order->name }}</div>
        </div>
        <div>
            <div class="desc">
                <div class="kata">Address</div>
                <div> : </div>
                <div class="isi">{{ $order->address }}</div>
            </div>

        </div>
        <div>
            <div class="desc">
                <div class="kata">Description</div>
                <div>: </div>
                <div class="isi">{{ $order->description }}</div>
            </div>
        </div>
        @if($order->status == 'accepted')
            <div class="d-flex justify-content-end">
                <a href="/complete/{{ $order->orderId }}" class="btn btnAcc">Complete</a>
            </div>
        @else
            <div class="d-flex justify-content-end">
                <a href="/accept/{{ $order->orderId }}" class="btn btnAcc">Accept</a>
            </div>
        @endif
    </div>
   
</div>

@endsection