<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@extends('layout.template')

@section('title','Daftar')

@section('content')

<div class="content">
    <div class="sec">
        
        <div class="cont">
            <div class="registerTxt">Register</div>
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
                        Email Address
                    </label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="name@example.com" value="{{ old('name') }}">
                    <label class="ph" for="floatingInput">
                        <div>
                            Name
                        </div>
                    </label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="floatingInput" placeholder="name@example.com" value="{{ old('phone') }}">
                    <label class="ph" for="floatingInput">
                        <div>
                            Phone
                        </div>
                    </label>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select @error('location') is-invalid @enderror ph" id="floatingSelect" name="location" aria-label="Floating label select example">
                      <option value="0">Choose Location</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Bogor">Bogor</option>
                      <option value="Depok">Depok</option>
                      <option value="Tangerang">Tangerang</option>
                      <option value="Bekasi">Bekasi</option>
                    </select>
                    <label class="ph" for="floatingSelect">
                        <div>
                            Location
                        </div>
                    </label>
                    @error('location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Password
                        </div>
                    </label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Confirm Password
                        </div>
                    </label>
                    @error('confirm_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btnReg">Register</button>
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