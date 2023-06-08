<link rel="stylesheet" href="{{ asset('css/customer/myOrder.css') }}">

@extends('layout.template')

@section('title','My Order')

@section('content')

    <div class="content">

        <div class="ro">My Order</div>
        <div class="line"></div>
        <div class="dt">Daftar Pesanan Saya</div>
        @if($data->isEmpty())
        <div>Anda belum memiliki pesanan</div>
        @else
        
        @foreach ($data as $dt) 
            <div class="ordCont mb-3">
                <div class="leftPart ">
                    <div class="d-flex ordTxt">
                        <div class="kata">Service</div>
                        <div> : {{$dt->service }} </div>
                    </div>
                    <div class="d-flex ordTxt">
                        <div class="kata">Technician</div>
                        <div> : {{ $dt->name }}</div>
                    </div>
                    <div class="d-flex ordTxt">
                        <div class="kata">Status</div>
                        <div class="text-danger"> : Menunggu Teknisi</div>
                    </div>
                </div>
                <div class="rightPart">
                    <a href="/myOrderDetail/{{ $dt->orderId }}" class="btn btnAction">View Order</a>
                    <a class="btn btnCancel">Cancel</a>
                </div>
            </div>
        @endforeach
        @endif
    </div>

@endsection