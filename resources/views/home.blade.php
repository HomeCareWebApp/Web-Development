<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
       <div class="caraa">Cara Melakukan Pemesanan</div>
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

    <div class="sec5">
        <div class="cara">Frequently Ask Question</div>
        <div class="body">

            <div class="faq-content">
               
                <div class="faq-question">
                    <input id="q2" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q2" class="panel-title">Apakah jasa HomeCare hanya tersedia di Jabodetabek saja?</label>
                    <div class="panel-content">Ya, untuk sementara pemesanan jasa service di HomeCare hanya tersedia untuk daerah Jabodetabek</div>
                </div>
              
                <div class="faq-question">
                    <input id="q3" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q3" class="panel-title">Bagaimana mendaftar menjadi teknisi?</label>
                    <div class="panel-content">Anda dapat ke menu "Daftar", kemudian di bagian paling bawah halaman
                        terdapat opsi untuk mendaftar menjadi teknisi
                    </div>
                </div>

                <div class="faq-question">
                    <input id="q1" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q1" class="panel-title">Apakah saya bisa melakukan beberapa pesanan sekaligus?</label>
                    <div class="panel-content">
                        Ya, anda dapat melakukan beberapa pesanan dalam waktu yang bersamaan.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        






@endsection