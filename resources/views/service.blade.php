<link rel="stylesheet" href="{{ asset('css/service.css') }}">

@extends('layout.template')

@section('title','Services')

@section('content')

    <div class="content">
        <div class="jk">Jasa Kami</div>
        <div class="servDesc">Kami menyediakan berbagai jasa service</div>
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
                        <div>Electrical</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/cleaning" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Cleaning.png') }}" alt=""></div>
                        <div>Cleaning</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/water" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Water.png') }}" alt=""></div>
                        <div>Water</div>
                    </a>
                </div>
                <div id="aa" class="perServ col">
                    <a href="/service/refrigirator" class="servLink">
                        <div class="imgCont"><img src="{{ asset('img/Refrigirator.png') }}" alt=""></div>
                        <div>Refrigirator</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="{{ asset('js/service.js') }}"></script>