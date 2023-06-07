<link rel="stylesheet" href="{{ asset('css/technician.css') }}">

@extends('layout.template')

@section('title','Choose Technician')

@section('content')

<div class="content">

    <div class="judulJasa">Jasa Servis {{ $servName }}</div>
    <div class="line"></div>
    <div class="dt">Daftar Teknisi</div>
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
                <a href="/profile/{{ $t->technicianId }}" class="btn btnAction">View Profile</a>
                <a href="/technician/{{ $t->technicianId }}" class="btn btnAction">Choose</a>
            </div>
        </div>
        
        @endforeach
        <div class="pagi">
            {{ $technician->links() }}
        </div>
</div>

@endsection