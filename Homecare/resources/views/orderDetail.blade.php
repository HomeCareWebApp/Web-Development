<link rel="stylesheet" href="{{ asset('css/orderDetail.css') }}">

@extends('layout.template')

@section('title','Order Detail')

@section('content')

<div class="content">

    <div class="judull">Order</div>
    <div class="line"></div>
    <div class="descCont">
        <div class="desc">
            <div>Service : </div>
        </div>
        <div class="desc">
            <div>Technician : </div>
        </div>
        <div class="desc">
            <div>Address : </div>
        </div>
        <div class="desc">
            <div>Description : </div>
            <textarea name="" id="" class="textArea">

            </textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btnAcc">Accept</button>
        </div>
    </div>
   
</div>

@endsection