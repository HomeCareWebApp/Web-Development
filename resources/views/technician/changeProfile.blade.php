<link rel="stylesheet" href="{{ asset('css/technician/changeProfile.css') }}">

@extends('layout.template')

@section('title','Profil')

@section('content')

<div class="content">

    <div class="upper">
        <a href="{{url()->previous()}}" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="ro">Profil Teknisi</div>
    </div>
    <div class="line"></div>
    @if(session()->has('change'))
    <div class="alert alert-success alert-dismissible fade show al" role="alert">
        {{ session('change') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('picture'))
    <div class="alert alert-success alert-dismissible fade show al" role="alert">
        {{ session('picture') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex cont">
        <div class="leftPart">
            <div class="imgCont mb-2">
                <img class="pp" src="{{ asset('techImg/'.$technician->technicianId.'.png') }}" alt="">
            </div>
            <div>{{ $technician->technicianId }}</div>
            <form action="/changePicture" method="POST" id="picture" enctype="multipart/form-data">
                @csrf
                <input class="custom-file-input" type="file" name="image" id="image" onchange="form.submit()" >
            </form>
            <input type="hidden" id="loc" value="{{ $technician->location }}">
        </div>
        <div class="rightPart">
            <div  class="descCont">

                <form action="/saveChange" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" value="{{ $technician->name }}">
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lokasi</label>
                        <select class="form-select @error('location') is-invalid @enderror" aria-label="Default select example" id="mySelect" name="location" >
                            <option value="jakarta">Jakarta</option>
                            <option value="bogor">Bogor</option>
                            <option value="depok">Depok</option>
                            <option value="tangerang">Tangerang</option>
                            <option value="bekasi">Bekasi</option>
                        </select>
                        @error('location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pengalaman</label>
                        <textarea class="form-control @error('experience') is-invalid @enderror" name="experience" aria-label="With textarea">{{ $technician->experience }}</textarea>
                        @error('experience')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="btnCont">
                        <button type="submit" class="btn btnSC">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
   
@endsection

<script src="{{ asset('js/changeProfile.js') }}"></script>
