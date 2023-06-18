<link rel="stylesheet" href="{{ asset('css/technician/onGoing.css') }}">

@extends('layout.template')

@section('title','Pesanan')

@section('content')

    <div class="content">

        <div class="ro">Pesanan Sedang Berlangsung</div>
        <div class="line"></div>
        <div class="dt">Daftar pesanan yang Sedang Berlangsung</div>
        @if($data->isEmpty())
        <div>Anda tidak memiliki pesanan yang sedang berlangsung</div>
        @else
        
        @foreach ($data as $dt) 
            <div class="ordCont">
                <div class="leftPart ">
                    <div class="d-flex ordTxt">
                        <div class="kata">Servis</div>
                        <div> : {{$dt->service }} </div>
                    </div>
                    <div class="d-flex ordTxt">
                        <div class="kata">Pelanggan</div>
                        <div> : {{ $dt->name }}</div>
                    </div>
                </div>
                <div class="rightPart">
                    <a href="/orderDetail/{{ $dt->orderId }}" class="btn btnAction">Lihat Pesanan</a>
                </div>
            </div>
            @endforeach
            <div class="pagi">
                {{ $data->links() }}
            </div>
        @endif
    </div>

@endsection