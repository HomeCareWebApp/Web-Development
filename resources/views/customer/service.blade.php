<link rel="stylesheet" href="{{ asset('css/customer/service.css') }}">

@extends('layout.template')

@section('title','Servis')

@section('content')

    <div class="content">
        <div class="jk">Jasa Kami</div>
        <div class="servDesc">Berikut jasa service yang kami sediakan</div>
        <div class="container d-flex justify-content-center">

            <div class="servCont row ">
                <div id="aa" class="perServ col">
                    <a href="/service/ac" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/AC.png') }}" alt=""></div>
                        <div>AC</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/electrical" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Electrical.png') }}" alt=""></div>
                        <div>Listrik</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/cleaning" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Cleaning.png') }}" alt=""></div>
                        <div>Pembersihan</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/water" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Water.png') }}" alt=""></div>
                        <div>Air</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/refrigirator" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Refrigirator.png') }}" alt=""></div>
                        <div>Kulkas</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="{{ asset('js/service.js') }}"></script>