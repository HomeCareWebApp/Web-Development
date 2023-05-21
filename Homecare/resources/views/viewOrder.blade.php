<link rel="stylesheet" href="{{ asset('css/viewOrder.css') }}">

@extends('layout.template')

@section('title','Choose Technician')

@section('content')

    <div class="content">

        <div class="ro">Request Order</div>
        <div class="line"></div>
        <div class="dt">Daftar Order Servis</div>
        <div class="techCont">
            <div class="leftPart ">
                <div class="d-flex ordTxt">
                    <div>Service : </div>
                    <div>Nama Servis </div>
                </div>
                <div class="d-flex ordTxt">
                    <div>Customer : </div>
                    <div>Nama Cust</div>
                </div>
            </div>
            <div class="rightPart">
                <button class="btn btnAction">View Order</button>
                <button class="btn btnAction">Accept</button>
            </div>
        </div>
    </div>

@endsection