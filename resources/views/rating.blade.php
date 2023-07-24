<link rel="stylesheet" href="{{ asset('css/rating.css') }}">

@extends('layout.template')

@section('title','Rating')

@section('content')

<div class="content">

    <div class="upper">
        <a href="/orderHistoryCust" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="rating">Penilaian Teknisi</div>
    </div>
    <div class="line"></div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/rate" method="post">
        @csrf
        <div class="box p-3 gap-2 ">
            <span class="">Servis : {{$orders->service}}</span>
            <span class="">Teknisi : {{$orders->name}}</span>
            <span>Penilaian Teknisi :</span>
            <div class="btn-group rateBox my-2" role="group" aria-label="Basic radio toggle button group">
                <div class="rateBoxUpper">
                    <input type="radio" class="btn-check w-50" name="rating" value="1" id="btnradio1" autocomplete="off">
                    <label class="rateText btn btn-outline-primary" for="btnradio1">Sangat Buruk</label>

                    <input type="radio" class="btn-check" name="rating" value="2" id="btnradio2" autocomplete="off">
                    <label class="rateText btn btn-outline-primary" for="btnradio2">Buruk</label>

                    <input type="radio" class="btn-check" name="rating" value="3" id="btnradio3" autocomplete="off">
                    <label class="rateText btn btn-outline-primary" for="btnradio3">Netral</label>
                </div>
                
                <div class="rateBoxLower">
                    <input type="radio" class="btn-check" name="rating" value="4" id="btnradio4" autocomplete="off">
                    <label class="rateText btn btn-outline-primary" for="btnradio4">Bagus</label>

                    <input type="radio" class="btn-check" name="rating" value="5" id="btnradio5" autocomplete="off">
                    <label class="rateText btn btn-outline-primary" for="btnradio5">Sangat Bagus</label>
                </div>
            </div>
            <input type="hidden" name="orderId" value="{{$orders->orderId}}">
            <button type="submit" class="btn btn-warning jsutify-content-center">Kirim</button>
        </div>
    </form>
</div>

@endsection