<link rel="stylesheet" href="{{ asset('css/service.css') }}">

@extends('layout.template')

@section('title','Services')

@section('content')

    <div class="content">
        <div class="jk">Jasa Kami</div>
        <div class="servDesc">Kami menyediakan berbagai jasa service</div>
        <div class="container d-flex justify-content-center">

            <div class="servCont row ">
                <div class="perServ col-md-6 col-sm-12 col-lg-2">
                    <a href="" class="servLink">
                        <div class="imgCont"></div>
                        <div>AC</div>
                    </a>
                </div>
                <div class="perServ col-md-6 col-sm-12 col-lg-2">
                    <a href="" class="servLink">
                        <div class="imgCont"></div>
                        <div>Electrical</div>
                    </a>
                </div>
                <div class="perServ col-md-6 col-sm-12 col-lg-2">
                    <a href="" class="servLink">
                        <div class="imgCont"></div>
                        <div>Cleaning</div>
                    </a>
                </div>
                <div class="perServ col-md-6 col-sm-12 col-lg-2">
                    <a href="" class="servLink">
                        <div class="imgCont"></div>
                        <div>Water</div>
                    </a>
                </div>
                <div class="perServ col-md-6 col-sm-12 col-lg-2">
                    <a href="" class="servLink">
                        <div class="imgCont"></div>
                        <div>Refrigirator</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection