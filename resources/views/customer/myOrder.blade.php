<link rel="stylesheet" href="{{ asset('css/customer/myOrder.css') }}">

@extends('layout.template')

@section('title','Pesanan')

@section('content')

    <div class="content">

        <div class="ro">Pesanan Saya</div>
        <div class="line"></div>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show al" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="dt">Daftar Pesanan Saya</div>

        @if($data->isEmpty())
        <div>Anda belum memiliki pesanan</div>
        @else
        
        @foreach ($data as $dt) 
            <div class="ordCont mb-3">
                <div class="leftPart ">
                    <div class="d-flex ordTxt">
                        <div class="kata">Servis</div>
                        <div> : {{$dt->service }} </div>
                    </div>
                    <div class="d-flex ordTxt">
                        <div class="kata">Teknisi</div>
                        <div> : {{ $dt->name }}</div>
                    </div>
                    <div class="d-flex ordTxt">
                        <div class="kata">Status</div>
                        <div class="text-danger"> : Menunggu Teknisi</div>
                    </div>
                </div>
                <div class="rightPart">
                    <a href="/myOrderDetail/{{ $dt->orderId }}" class="btn btnAction">Lihat Pesanan</a>
                    {{-- <a href="/cancel/{{ $dt->orderId }}" class="btn btnCancel">Cancel</a> --}}
                    <a class="btn btnCancel" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $dt->orderId }}">Batal</a>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop-{{ $dt->orderId }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Batalkan Pesanan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Anda yakin ingin membatalkan pesanan ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btnClose" data-bs-dismiss="modal">Tutup</button>
                      <a href="/cancel/{{ $dt->orderId }}" class="btn btnOut">Batalkan</a>
                    </div>
                  </div>
                </div>
              </div>
        
        @endforeach
        <div class="pagi">
            {{ $data->links() }}
        </div>
        @endif
    </div>

   
@endsection