<link rel="stylesheet" href="{{ asset('css/customer/orderDetail.css') }}">

@extends('layout.template')

@section('title','Detail Pesanan')

@section('content')

<div class="content">

    <div class="upper">
        <div class="judull">Detail Pesanan</div>
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
            @if($order->status == 'accepted')
                <a class="btn btnMsg" href="tel:+62{{ $order->phone }}">Telefon</a>
                <a class="btn btnMsg" href="https://wa.me/+62{{ $order->phone }}">Pesan</a>
            @elseif($order->status == 'requested')
                {{-- <a class="btn btnCancel" href="/cancel/{{ $order->orderId }}">Cancel</a> --}}
                <a class="btn btnCancel" data-bs-toggle="modal" data-bs-target="#cancelModal">Batal</a>
            @elseif($order->status ==  'completed')
                <div>Tanggal : {{ $order->orderDate }}</div>
            @endif
        </div>
      
    </div>
   
</div>

<div class="modal fade" id="cancelModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Batalkan Pesanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Anda yakin ingin membatalkan pesanan ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btnClose" data-bs-dismiss="modal">Tutup</button>
          <a href="/cancel/{{ $order->orderId }}" class="btn btnOut">Batalkan</a>
        </div>
      </div>
    </div>
  </div>

@endsection