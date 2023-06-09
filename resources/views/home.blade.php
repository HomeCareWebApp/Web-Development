<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@extends('layout.template')

@section('title','Home')

@section('content')

<div class="content">

    <div class="d-flex justify-content-center align-items-center sec1">
    
        <div class="hc">HomeCare</div>
        <div class="slang">Solusi Terbaik Dalam Merawat Rumah Anda</div>
        <a href="/service" class="lj">Lihat Jasa</a>
    </div>
    
    <div id="section-2" class="d-flex sec2">
        <div class="tentang">
            <div class="ttgText">
                Tentang Kami
            </div>
        </div>
        <div class="hcdesc">
            <div class="descText">
                HomeCare adalah aplikasi penyedia jasa service untuk merawat dan memperbaiki
                peralatan di rumah anda. HomeCare menyediakan jasa berupa servis AC,
                listrik, air, pembersihan rumah dan kulkas.
                HomeCare memberikan anda kebebasan untuk memilik teknisi yang anda inginkan.
                Dengan adanya HomeCare, rumah anda akan tetap terjaga 
    
            </div>
        </div>
    </div>
    
    <div class="sec3 d-flex">
        <div class="why">Mengapa HomeCare?</div>
        <div class="reason d-flex justify-content-around">
            <div class="penampung">
                <div class="point">PRAKTIS</div>
                <div class="pointDesc">
                    Anda dapat mengakses website HomeCare darimana dan dimana saja
                </div>
            </div>
            <div class="penampung">
                <div class="point">FLEKSIBEL</div>
                <div class="pointDesc">HomeCare memberi anda kebebasan untuk memilih teknisi sesuai dengan kemauan anda</div>
            </div>
            <div class="penampung">
                <div class="point">TERPERCAYA</div>
                <div class="pointDesc">Anda dapat melihat profil dari teknisi-teknisi yang ada terdaftar di website HomeCare</div>
    
            </div>
        </div>
    </div>

    <div class="sec4">
        <div class="cara">Cara Pemesanan</div>
        <div class="step">
            <div>1. Pilih jasa servis yang diinginkan</div>
            <div>2. Pilih teknisi yang diinginkan. Anda dapat melihat profil teknisi terlebih dahulu sebelum memilih</div>
            <div>3. Mengisi alamat anda dan deskripsi tentang servis yang diinginkan</div>
            <div>4. Melakukan pemesanan jasa servis</div>
            <div>5. Menunggu konfirmasi dari teknisi</div>
            <div>6. Setelah terkonfirmasi, anda dapat mengubungi teknisi ataupun teknisi akan menghubungi anda</div>
            <div>7. Diskusi harga dan pembayaran akan dilakukan secara langsung oleh pelanggan dan teknisi</div>
        </div>
    </div>
</div>

{{-- <div class="tabContent">

    <div class="d-flex justify-content-center align-items-center sec1">
    
        <div class="hc">HomeCare</div>
        <div class="slang">Solusi Terbaik Dalam Merawat Rumah Anda</div>
        <a href="" class="lj">Lihat Jasa</a>
    </div>

    <div class="d-flex sec2">
        <div class="tentang">
            <div class="ttgText">
                Tentang Kami
            </div>
        </div>
        <div class="hcdesc">
            <div class="descText">
                HomeCare adalah aplikasi penyedia jasa service untuk merawat dan memperbaiki
                peralatan di rumah anda. HomeCare menyediakan servis berupa (..........).
                HomeCare memberikan anda kebebasan untuk memilik teknisi yang anda inginkan.
                Dengan adanya HomeCare, rumah anda akan tetap terjaga 
    
            </div>
        </div>
    </div>

    <div class="sec3 d-flex">
        <div class="why">Mengapa HomeCare?</div>
        <div class="reason d-flex justify-content-around">
            <div class="penampung">
                <div class="point">PRAKTIS</div>
                <div class="pointDesc">
                    Anda dapat mengakses website HomeCare darimana dan dimana saja
                </div>
            </div>
            <div class="penampung">
                <div class="point">FLEKSIBEL</div>
                <div class="pointDesc">HomeCare memberi anda kebebasan untuk memilih teknisi sesuai dengan kemauan anda</div>
            </div>
            <div class="penampung">
                <div class="point">TERPERCAYA</div>
                <div class="pointDesc">Anda dapat melihat profil dari teknisi-teknisi yang ada terdaftar di website HomeCare</div>
    
            </div>
        </div>
    </div>
    
</div> --}}

{{-- <div class="mobContent">

    <div class="d-flex justify-content-center align-items-center sec1">
    
        <div class="hc">HomeCare</div>
        <div class="slang">Solusi Terbaik Dalam Merawat Rumah Anda</div>
        <a href="" class="lj">Lihat Jasa</a>
    </div>

    <div class="sec2">
       
        <div class="tentang">
            <div class="ttgText">
                Tentang Kami
            </div>
        </div>
    
    
        <div class="hcdesc">

            <div class="descText">
                HomeCare adalah aplikasi penyedia jasa service untuk merawat dan memperbaiki
                peralatan di rumah anda. HomeCare menyediakan servis berupa (..........).
                HomeCare memberikan anda kebebasan untuk memilik teknisi yang anda inginkan.
                Dengan adanya HomeCare, rumah anda akan tetap terjaga 
    
            </div>
        </div>
    </div>

    <div class="sec3 d-flex">
        <div class="why">Mengapa HomeCare?</div>
        <div class="reason d-flex">
            <div class="penampung">
                <div class="point">PRAKTIS</div>
                <div class="pointDesc">
                    Anda dapat mengakses website HomeCare darimana dan dimana saja
                </div>
            </div>
            <div class="penampung">
                <div class="point">FLEKSIBEL</div>
                <div class="pointDesc">HomeCare memberi anda kebebasan untuk memilih teknisi sesuai dengan kemauan anda</div>
            </div>
            <div class="penampung">
                <div class="point">TERPERCAYA</div>
                <div class="pointDesc">Anda dapat melihat profil dari teknisi-teknisi yang ada terdaftar di website HomeCare</div>
    
            </div>
        </div>
    </div>

    
</div> --}}



@endsection