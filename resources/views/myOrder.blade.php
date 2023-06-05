<link rel="stylesheet" href="{{ asset('css/myOrder.css') }}">

@extends('layout.template')

@section('title','My Order')

@section('content')

    <div class="content">

        <div class="ro">My Order</div>
        <div class="line"></div>
        <div class="dt">Daftar Order Servis</div>
        @if($data->isEmpty())
        <div>Anda belum memiliki pesanan</div>
        @else
        
            <div class="ordCont">
                @foreach ($data as $dt) 
                    <div class="leftPart ">
                        <div class="d-flex ordTxt">
                            <div class="kata">Service</div>
                            <div> : {{$dt->service }} </div>
                        </div>
                        <div class="d-flex ordTxt">
                            <div class="kata">Technician</div>
                            <div> : {{ $dt->name }}</div>
                        </div>
                    </div>
                    <div class="rightPart">
                        <a href="/orderDetail/{{ $dt->orderId }}" class="btn btnAction">View Order</a>
                        <button class="btn btnAction">Accept</button>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection