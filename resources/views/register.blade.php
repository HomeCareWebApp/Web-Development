<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@extends('layout.template')

@section('title','Daftar')

@section('content')

<div class="content">
    <div class="sec">
        <div class="cont">
            <div class="registerTxt">Register</div>
            <form action="">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label class="ph" for="floatingInput">
                        <div>
                            Email Address
                        </div>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label class="ph" for="floatingInput">
                        <div>
                            Name
                        </div>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label class="ph" for="floatingInput">
                        <div>
                            Phone
                        </div>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Password
                        </div>
                    </label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label class="ph" for="floatingPassword">
                        <div>
                            Confirm Password
                        </div>
                    </label>
                </div>
               <input type="button" value="Daftar" class="btn btnReg">
               <div class="keMasuk">
                   <div>Sudah ada akun? </div><a href="">Masuk</a>
               </div>

            </form>
        </div>
    </div>
</div>

@endsection