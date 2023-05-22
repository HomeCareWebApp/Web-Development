<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@extends('layout.template')

@section('title','Masuk')

@section('content')

<div class="content">
    <div class="sec">
        <div class="cont">
            <div class="loginTxt">Login</div>
            <form action="">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label class="ph" for="floatingInput">
                        <div>
                            Email Address
                        </div>
                    </label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Password
                        </div>
                    </label>
                </div>
               <input type="button" value="Masuk" class="btn btnLogin">
               <div class="keDaftar">
                   <div>Belum ada akun? </div><a href="">Daftar</a>
               </div>

            </form>
        </div>
    </div>
</div>

@endsection