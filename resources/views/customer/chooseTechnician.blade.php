<link rel="stylesheet" href="{{ asset('css/customer/technician.css') }}">

@extends('layout.template')

@section('title','Daftar Teknisi')

@section('content')

<div class="content">

    <div class="judulJasa">
        <a href="/service" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="text-center">Jasa Servis {{ $servName }}</div>
    </div>
    </a>
    <div class="line"></div>
    <div class="dt">
        Daftar Teknisi
    </div>
    @if($technician->isEmpty())
        <div>Anda belum memiliki pesanan</div>
    @else
    @foreach ($technician as $t)
        <div class="techCont">
            <div class="leftPart d-flex align-items-center">
                <div>
                    <img class="techImg" src="{{ asset('techImg/'.$t->technicianId.'.png') }}" alt="">
                </div>
                <div>
                    {{ $t->name }}
                </div>
            </div>
            <div class="rightPart">
                <a href="/profile/{{ $t->technicianId }}" class="btn btnAction">Lihat Profil</a>
                <a href="/technician/{{ $t->technicianId }}" class="btn btnAction">Pilih</a>
            </div>
        </div>
        
        @endforeach
        <div class="pagi">
            {{ $technician->links() }}
        </div>
        @endif
</div>

@endsection