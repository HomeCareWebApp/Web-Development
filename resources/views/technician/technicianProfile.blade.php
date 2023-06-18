<link rel="stylesheet" href="{{ asset('css/technician/techProfile.css') }}">

@extends('layout.template')

@section('title','Profil Teknisi')

@section('content')

<div class="content">

    <div class="upper">
        <a href="{{url()->previous()}}" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="ro">Profil Teknisi</div>
    </div>
    <div class="line"></div>
    <div class="d-flex cont">
        <div class="leftPart">
            <div class="imgCont mb-2">
                <img class="pp" src="{{ asset('techImg/'.$technician->technicianId.'.png') }}" alt="">
            </div>
            <div class="mb-2">{{ $technician->name }}</div>
            <div>{{ $technician->technicianId }}</div>
        </div>
        <div class="rightPart">
            <div  class="descCont">
                <div class="desc">
                    <div class="det">Rating</div>
                    <div class="detv">{{ number_format($rating,2) }} / 5.00 ({{$count}})</div>
                </div>
                <div class="desc">
                    <div class="det">Kategori</div>
                    <div class="detv">{{ $technician->category }}</div>
                </div>
                <div class="desc">
                    <div class="det">Lokasi</div>
                    <div class="detv">{{ $technician->location }}</div>
                </div>
                <div class="desc">
                    <div class="det">Pengalaman</div>
                    <div class="detv">{{ $technician->experience }}</div>
                </div>
            </div>
            {{-- <div>
                <button class="btn">Back to Order</button>
            </div> --}}
        </div>
    </div>
</div>
@endsection