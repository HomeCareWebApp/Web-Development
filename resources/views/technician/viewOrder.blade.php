<link rel="stylesheet" href="{{ asset('css/technician/viewOrder.css') }}">

@extends('layout.template')

@section('title','Pesanan')

@section('content')

    <div class="content">

        <div class="ro">Daftar Pesanan</div>
        <div class="line"></div>
        <div class="dt">Daftar Order Servis</div>
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
                            <div class="kata">Pelanggan</div>
                            <div> : {{ $dt->name }}</div>
                        </div>

                        <div class="d-flex ordTxt">
                            <div class="kata">Status</div>
                            <div class="text-danger"> : Menunggu Konfirmasi Anda</div>
                        </div>
                    </div>
                    <div class="rightPart">
                        <a href="/orderDetail/{{ $dt->orderId }}" class="btn btnAction">Lihat Pesanan</a>
                        <a class="btn btnAction" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $dt->orderId }}">Terima</a>
                    </div>
                </div>

                <div class="modal fade" id="staticBackdrop-{{ $dt->orderId }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Terima Pesanan</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Anda yakin ingin menerima pesanan ini?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btnOut" data-bs-dismiss="modal">Tutup</button>
                          <a href="/accept/{{ $dt->orderId }}" class="btn btnClose">Terima</a>
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