<link rel="stylesheet" href="{{ asset('css/techProfile.css') }}">

@extends('layout.template')

@section('title','Profile')

@section('content')

<div class="content">

    <div class="ro">Technician Profile</div>
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
                    <div class="det">Age </div>
                    <div>30</div>
                </div>
                <div class="desc">
                    <div class="det">Rating</div>
                    <div>{{ $technician->rating }} / 5.00</div>
                </div>
                <div class="desc">
                    <div class="det">Category</div>
                    <div>{{ $technician->category }}</div>
                </div>
                <div class="desc">
                    <div class="det">Location</div>
                    <div>{{ $technician->location }}</div>
                </div>
                <div class="desc">
                    <div class="det">Experience</div>
                    <div>Value</div>
                </div>
            </div>
            {{-- <div>
                <button class="btn">Back to Order</button>
            </div> --}}
        </div>
    </div>
   
@endsection