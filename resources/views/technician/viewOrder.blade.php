<link rel="stylesheet" href="{{ asset('css/technician/viewOrder.css') }}">

@extends('layout.template')

@section('title','View Order')

@section('content')

    <div class="content">

        <div class="ro">Request Order</div>
        <div class="line"></div>
        <div class="dt">Daftar Order Servis</div>
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
                            <div class="kata">Customer</div>
                            <div> : {{ $dt->name }}</div>
                        </div>

                        <div class="d-flex ordTxt">
                            <div class="kata">Status</div>
                            <div class="text-danger"> : Menunggu Konfirmasi Anda</div>
                        </div>
                    </div>
                    <div class="rightPart">
                        <a href="/orderDetail/{{ $dt->orderId }}" class="btn btnAction">View Order</a>
                        <a href="/accept/{{ $dt->orderId }}" class="btn btnAction">Accept</a>
                    </div>
                </div>
            @endforeach
            <div class="pagi">
                {{ $data->links() }}
            </div>
        @endif
    </div>

@endsection