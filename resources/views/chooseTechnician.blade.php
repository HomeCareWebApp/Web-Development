<link rel="stylesheet" href="{{ asset('css/technician.css') }}">

@extends('layout.template')

@section('title','Choose Technician')

@section('content')

<div class="content">

    <div class="judulJasa">Jasa Servis AC</div>
    <div class="line"></div>
    <div class="dt">Daftar Teknisi</div>
    @foreach ($technician as $t)
    
        <div class="techCont">
            <div class="leftPart d-flex align-items-center">
                <div>
                    <img class="techImg" src="" alt="">
                </div>
                <div>
                    {{ $t->name }}
                </div>
            </div>
            <div class="rightPart">
                <button class="btn btnAction">View Profile</button>
                <button class="btn btnAction">Choose</button>
            </div>
        </div>
        
        @endforeach
        <div class="pagi">
            {{ $technician->links() }}
        </div>
</div>

@endsection