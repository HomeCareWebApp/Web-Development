<link rel="stylesheet" href="{{ asset('css/orderHistory.css') }}">

@extends('layout.template')

@section('title','Order History')

@section('content')

    <div class="content">

        <div class="ro">Order History</div>
        <div class="line"></div>
        <form action="/rating" method="get">
            @foreach($completed as $data)
            <div class="descCont">
                <div class="leftPart ">
                    <div class="d-flex ordTxt">
                        <div class="kata">Service</div>
                        <div> : {{$data->service}} </div>
                    </div>
                    <div class="date">
                        {{$data->orderDate}}
                    </div>
                </div>
                <div class="rightPart">
                    <!-- {{$role = Auth::user()->role}} -->
                    @if($role == 'Customer')
                    <input type="hidden" name="orderId" value="{{$data->orderId}}">
                    <button type="submit" class="btn btnAction">Rating</button>
                    @endif
                    <button type="button" class="btn btnAction">View Detail</button>
                </div>
            </div>
            @endforeach
        </form>
    </div>
    

@endsection