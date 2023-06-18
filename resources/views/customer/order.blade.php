<link rel="stylesheet" href="{{ asset('css/customer/order.css') }}">

@extends('layout.template')

@section('title','Pesan')

@section('content')

<div class="content">

    <div class="upper">
        <a href="{{url()->previous()}}" class="back">
            <img src="/img/left-arrow.png" class="backBtn">
        </a>
        <div class="judull">Permintaan Pesanan</div>
    </div>
    <div class="line"></div>
    <form action="/order" method="POST">
        @csrf
        <div class="descCont">

            <div class="desc">
                <div class="kata">Servis</div>
                <div> : {{ $technician->category }}</div>
                <input type="hidden" name="service" id="service" value="{{ $technician->category }}">
            </div>
            <div class="desc">
                <div class="kata">Teknisi</div>
                <div> : {{ $technician->name }} - {{ $technician->technicianId }}</div>
                <input type="hidden" name="technician" id="technician" value="{{ $technician->technicianId }}">
            </div>
            <div>
                <div class="desc">
                    <div class="kata">Alamat</div>
                    <div> : </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Leave a comment here" name="address" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Alamat</label>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div>
                <div class="desc">
                    <div class="kata">Deskripsi</div>
                    <div>: </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Leave a comment here" name="description" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Deskripsi</label>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btnOrder">Pesan</button>
            </div>
        </div>
    </form>
   
</div>

@endsection