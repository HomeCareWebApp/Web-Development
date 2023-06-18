<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@extends('layout.template')

@section('title','Masuk')

@section('content')

<div class="content">
    <div class="sec">
        <div class="cont">
            <div class="loginTxt">Masuk</div>
            @if(session()->has('errorLogin'))
                <div class="alert alert-danger alert-dismissible fade show al" role="alert">
                    {{ session('errorLogin') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                    <label class="ph" for="floatingInput">
                        <div>
                            Email
                        </div>
                    </label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Kata Sandi
                        </div>
                    </label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btnLogin">Masuk</button>
               
               <div class="keDaftar">
                   <div>Belum ada akun? </div><a href="/register">Daftar</a>
               </div>

            </form>
        </div>
    </div>
</div>

@endsection