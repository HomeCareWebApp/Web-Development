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
            <a class="btn btnAcc" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Complete</a>
        @else
            {{-- <a href="/accept/{{ $order->orderId }}" class="btn btnAcc">Accept</a> --}}
            <a  class="btn btnAcc" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Accept</a>
        @endif
        </div>
    </div>
   
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Accept Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Anda yakin ingin menerima pesanan ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btnOut" data-bs-dismiss="modal">Tutup</button>
          <a href="/accept/{{ $order->orderId }}" class="btn btnClose">Accept</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Complete Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Anda yakin ingin menyelesaikan pesanan ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btnOut" data-bs-dismiss="modal">Tutup</button>
          <a href="/complete/{{ $order->orderId }}" class="btn btnClose">Complete</a>
        </div>
      </div>
    </div>
  </div>


@endsection