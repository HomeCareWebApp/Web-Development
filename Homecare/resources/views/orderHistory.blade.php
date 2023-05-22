<link rel="stylesheet" href="{{ asset('css/orderHistory.css') }}">

@extends('layout.template')

@section('title','Order History')

@section('content')

    <div class="content">

        <div class="ro">Order History</div>
        <div class="line"></div>
        <div class="descCont">
            <div class="leftPart ">
                <div class="d-flex ordTxt">
                    <div class="kata">Service</div>
                    <div> : Nama Servis </div>
                </div>
                <div class="date">
                   date
                </div>
            </div>
            <div class="rightPart">
                <button class="btn btnAction">Rating</button>
                <button class="btn btnAction">View Detail</button>
            </div>
        </div>
    </div>

@endsection