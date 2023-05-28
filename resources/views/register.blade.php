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
                    <input type="password" class="form-control @error('c_password') is-invalid @enderror" name="c_password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Confirm Password
                        </div>
                    </label>
                    @error('c_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btnReg">Register</button>
               <div class="keMasuk">
                   <div>Sudah ada akun? </div><a href="/login">Masuk</a>
               </div>

            </form>
        </div>
    </div>
</div>

@endsection