<link rel="stylesheet" href="{{ asset('css/customer/order.css') }}">

@extends('layout.template')

@section('title','Order')

@section('content')

<div class="content">

    <div class="judull">Request Order</div>
    <div class="line"></div>
    <form action="/order" method="POST">
        @csrf
        <div class="descCont">

            <div class="desc">
                <div class="kata">Service</div>
                <div> : {{ $technician->category }}</div>
                <input type="hidden" name="service" id="service" value="{{ $technician->category }}">
            </div>
            <div class="desc">
                <div class="kata">Technician</div>
                <div> : {{ $technician->name }} - {{ $technician->technicianId }}</div>
                <input type="hidden" name="technician" id="technician" value="{{ $technician->technicianId }}">
            </div>
            <div>
                <div class="desc">
                    <div class="kata">Address</div>
                    <div> : </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="address" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Address</label>
                </div>
            </div>
            <div>
                <div class="desc">
                    <div class="kata">Description</div>
                    <div>: </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Description</label>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btnOrder">Order</button>
            </div>
        </div>
    </form>
   
</div>

@endsection