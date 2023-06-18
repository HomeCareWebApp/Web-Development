<link rel="stylesheet" href="{{ asset('css/orderHistory.css') }}">

@extends('layout.template')

@section('title','Riwayat Pesanan')

@section('content')

    <div class="content">
        <div class="ro">Riwayat Pesanan</div>
        
        <div class="line"></div>
        @if($completed->isEmpty())
            <div>Anda tidak memiliki riwayat pesanan</div>
        @else

            @foreach($completed as $data)
            <form action="/rating" method="get">
                <div class="descCont">
                    <div class="leftPart ">
                        <div class="d-flex ordTxt">
                            <div class="kata">Servis</div>
                            <div> : {{$data->service}} </div>
                        </div>
                        <div class="date">
                            {{$data->orderDate}}
                        </div>
                    </div>
                    @if($data->rated == 1)
                        <span class="mx-3 text-success">Dinilai</span>
                    @else
                        <span class="mx-3 text-danger">Belum Dinilai</span>
                    @endif
                    <div class="rightPart">
                        <!-- {{$role = Auth::user()->role}} -->
                        @if($role == 'Customer')
                        <input type="hidden" name="orderId" value="{{$data->orderId}}">
                        <button type="submit" class="btn btnAction">Rating</button>
                        <a href="/myOrderDetail/{{ $data->orderId }}"  class="btn btnAction">Lihat Detail</a>
                        @else
                        <a href="/orderHistoryDetail/{{ $data->orderId }}"  class="btn btnAction">Lihat Detail</a>
                        @endif
                        
                    </div>
                </div>
            </form>
            @endforeach
            <div class="pagi">
                {{ $completed->links() }}
            </div>
        @endif
    </div>
    

@endsection