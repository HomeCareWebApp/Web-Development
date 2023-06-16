<link rel="stylesheet" href="{{ asset('css/technician/orderDetail.css') }}">

@extends('layout.template')

@section('title','Order Detail')

@section('content')

<div class="content">

    <div class="upper">
        <a href="{{url()->previous()}}" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="judull">Order Detail</div>
    </div>  
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
        <div class="d-flex btnCon">
        @if($order->status == 'accepted')
            <a class="btn btnMsg" href="tel:+62{{ $order->phone }}">Telefon</a>
            <a class="btn btnMsg" href="https://wa.me/+62{{ $order->phone }}">Chat</a>
            <a href="/complete/{{ $order->orderId }}" class="btn btnAcc">Complete</a>
        @else
            <a href="/accept/{{ $order->orderId }}" class="btn btnAcc">Accept</a>
        @endif
        </div>
    </div>
   
</div>

@endsection