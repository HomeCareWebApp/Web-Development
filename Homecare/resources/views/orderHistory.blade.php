<link rel="stylesheet" href="{{ asset('css/orderHistory.css') }}">

@extends('layout.template')

@section('title','Choose Technician')

@section('content')

    <div class="content">

        <div class="ro">Order History</div>
        <div class="line"></div>
        <div class="techCont">
            <div class="leftPart ">
                <div class="d-flex ordTxt">
                    <div>Service : </div>
                    <div>Nama Servis </div>
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