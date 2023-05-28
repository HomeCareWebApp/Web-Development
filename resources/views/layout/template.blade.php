<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
  </head>
  <body>
    
    <div class="header d-flex align-items-center">
       <div class="judul">
           <div class="">HomeCare</div>
       </div>
       <div class="d-flex dir nav-menu justify-content-around">
           <a href="#section-2" class="na">Tentang</a>
           <a href="/service" class="na">Service</a>
           <a href="/" class="na">Pesanan</a>

           @auth
           <div class="navbar-nav">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle usr" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                 
                </ul>
              </li>
            </div>
           @else
              <div class="d-flex dir">
                  <a href="/register" class="na">Daftar</a>
                  <div class="">/</div>
                  <a href="/login" class="na">Masuk</a>
              </div>

           @endauth
       </div>

       
    </div>

    <div class="mobHeader">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box">
              <li><a class="menu__item" href="/">Home</a></li>
              <li><a class="menu__item" href="#section-2">Tentang</a></li>
              <li><a class="menu__item" href="/service">Servis</a></li>
              <li><a class="menu__item" href="/">Pesanan</a></li>
              @auth
                <li><a class="menu__item" href="/logout">Logout</a></li>
              @else
                <li><a class="menu__item" href="/register">Daftar</a></li>
                <li><a class="menu__item" href="/login">Masuk</a></li>
              @endauth
            </ul>
        </div>
        @auth
          <div class="usr">
            Hi, {{ auth()->user()->name }}
          </div>
        @endauth
    </div>

    @yield('content')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>