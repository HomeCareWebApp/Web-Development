<link rel="stylesheet" href="{{ asset('css/historyDetail.css') }}">

@extends('layout.template')

@section('title','Detail Riwayat Pesanan')

@section('content')

<div class="content">

    <div class="upper">
        <div class="judull">Order Detail</div>
        <a href="{{url()->previous()}}" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        </div>
    <div class="line"></div>
    <div class="descCont">
        <div class="desc">
            <div class="kata">Servis</div>
            <div> : </div>
            <div class="isi">{{ $order->service }}</div>
        </div> 
        <div class="desc">
            <div class="kata">Teknisi</div>
            <div> : </div>
            <div class="isi">{{ $order->name }}</div>
        </div>
        <div>
            <div class="desc">
                <div class="kata">Alamat</div>
                <div> : </div>
                <div class="isi">{{ $order->address }}</div>
            </div>

        </div>
        <div>
            <div class="desc">
                <div class="kata">Deskripsi</div>
                <div>: </div>
                <div class="isi">{{ $order->description }}</div>
            </div>
        </div>
       
        <div class="d-flex btnCon">
           <div>Tanggal : {{ $order->orderDate }}</div>
        </div>
      
    </div>
   
</div>

@endsection