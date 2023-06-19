<link rel="stylesheet" href="{{ asset('css/customer/register.css') }}">

@extends('layout.template')

@section('title','Daftar')

@section('content')

<div class="content">
    <div class="sec">
        
        <div class="cont">
            <div class="registerTxt">Daftar</div>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show al" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                    <label class="ph" for="floatingInput">
                        Email
                    </label>
                    @error('email')
                        <div class="invalid-feedback er">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="name@example.com" value="{{ old('name') }}">
                    <label class="ph" for="floatingInput">
                        <div>
                            Nama
                        </div>
                    </label>
                    @error('name')
                    <div class="invalid-feedback er">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-text prefix" id="basic-addon1">+62</span>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror phoneCon" name="phone" id="phonee" placeholder="name@example.com" value="{{ old('phone') }}">
                        <label class="ph" for="floatingInput">
                            <div>
                                No HP
                            </div>
                        </label>
                        @error('phone')
                        <div class="invalid-feedback err">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select @error('location') is-invalid @enderror ph" id="floatingSelect" name="location" aria-label="Floating label select example">
                      <option value="0">Pilih Lokasi</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Bogor">Bogor</option>
                      <option value="Depok">Depok</option>
                      <option value="Tangerang">Tangerang</option>
                      <option value="Bekasi">Bekasi</option>
                    </select>
                    <label class="ph" for="floatingSelect">
                        <div>
                            Lokasi
                        </div>
                    </label>
                    @error('location')
                        <div class="invalid-feedback er">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Kata Sandi
                        </div>
                    </label>
                    @error('password')
                    <div class="invalid-feedback er">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Konfirmasi Sandi
                        </div>
                    </label>
                    @error('confirm_password')
                    <div class="invalid-feedback er">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btnReg">Daftar</button>
               <div class="keMasuk mb-2">
                   <div>Sudah ada akun? </div><a href="/login">Masuk</a>
               </div>

               <div class="keMasuk">
                <div>Ingin menjadi teknisi? <a href="/registerTechnician">Daftar</a></div>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection