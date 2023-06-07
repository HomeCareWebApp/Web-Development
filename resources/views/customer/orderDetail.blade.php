<link rel="stylesheet" href="{{ asset('css/customer/orderDetail.css') }}">

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
            <div class="kata">Technician</div>
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
       
        <div class="d-flex justify-content-end">
            <a href="/cancel/{{ $order->orderId }}" class="btn btnCancel">Cancel</a>
            {{-- <a href="https://wa.me/082248009200">Send Message</a> --}}
        </div>
      
    </div>
   
</div>

@endsection