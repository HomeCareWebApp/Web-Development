<link rel="stylesheet" href="{{ asset('css/order.css') }}">

@extends('layout.template')

@section('title','Order')

@section('content')

<div class="content">

    <div class="judull">Request Order</div>
    <div class="line"></div>
    <div class="descCont">
        <div class="desc">
            <div class="kata">Service</div>
            <div> : </div>
        </div>
        <div class="desc">
            <div class="kata">Technician</div>
            <div> : </div>
        </div>
        <div class="desc">
            <div class="kata">Address</div>
            <div> : </div>
        </div>
        <div>
            <div class="desc">
                <div class="kata">Description</div>
                <div>: </div>
            </div>
            <textarea name="" id="" class="textArea">

            </textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btnOrder">Order</button>
        </div>
    </div>
   
</div>

@endsection