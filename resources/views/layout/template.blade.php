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
           <a href="/" class="hm">HomeCare</a>
       </div>
       
       <div class="d-flex dir nav-menu justify-content-around">
         @auth
          @if (auth()->user()->role == 'Customer')
            <a href="/#section-2" class="na">Tentang</a>
            <a href="/service" class="na">Service</a>
            <div class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ord" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pesanan
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/myOrder">Pesanan Saya</a></li>
                  <li><a class="dropdown-item" href="/myOrder/onGoing">Sedang Berlangsung</a></li>
                  
                </ul>
              </li>
            </div>
            
          @elseif(auth()->user()->role == 'Technician')
            <div class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ord" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pesanan
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/viewOrder">Daftar Pesanan</a></li>
                  <li><a class="dropdown-item" href="/order/onGoing">Sedang Berlangsung</a></li>
                  
                </ul>
              </li>
            </div>
            <a href="/changeProfile/{{ $id }}" class="na">Profil</a>

          @endif
          
           <div class="navbar-nav">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle usr" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                 
                </ul>
              </li>
            </div>
           @else
              <a href="/#section-2" class="na">Tentang</a>
              <a href="/service" class="na">Service</a>
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
              @auth
                @if (auth()->user()->role == 'Customer')
                  <li><a class="menu__item" href="/">Home</a></li>
                  <li><a class="menu__item" href="#section-2">Tentang</a></li>
                  <li><a class="menu__item" href="/service">Servis</a></li>
                  {{-- <li><a class="menu__item" href="/">Pesanan</a></li> --}}
                  <div class="navbar-nav">
                    <li class="nav-item dropdown menu__item">
                      <a class="nav-link dropdown-toggle ord" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pesanan
                      </a>
                      <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="/myOrder">Request Order</a></li>
                        <li><a class="dropdown-item" href="/myOrder/onGoing">On Going Order</a></li>
                        
                      </ul>
                    </li>
                  </div>
                @elseif(auth()->user()->role == 'Technician')
                  <li><a class="menu__item" href="/viewOrder">Request Order</a></li>
                  <li><a class="menu__item" href="/order/onGoing">On Going Order</a></li>
                  <li><a class="menu__item" href="/changeProfile">Profile</a></li>
                @endif
                <li><a class="menu__item" href="/logout">Logout</a></li>
              @else
                <li><a class="menu__item" href="/">Home</a></li>
                <li><a class="menu__item" href="#section-2">Tentang</a></li>
                <li><a class="menu__item" href="/service">Servis</a></li>
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