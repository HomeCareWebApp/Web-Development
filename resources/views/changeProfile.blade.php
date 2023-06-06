<link rel="stylesheet" href="{{ asset('css/changeProfile.css') }}">

@extends('layout.template')

@section('title','Profile')

@section('content')

<div class="content">

    <div class="ro">Technician Profile</div>
    <div class="line"></div>
    <div class="d-flex cont">
        <div class="leftPart">
            <div class="imgCont mb-2">
                <img class="pp" src="{{ asset('techImg/'.$technician->technicianId.'.png') }}" alt="">
            </div>
            <div>{{ $technician->technicianId }}</div>
            <form action="/changePicture" method="POST" id="picture" enctype="multipart/form-data">
                @csrf
                <input class="custom-file-input" type="file" name="image" id="image" onchange="form.submit()" >
            </form>
            <input type="hidden" id="loc" value={{ $technician->location }}>
        </div>
        <div class="rightPart">
            <div  class="descCont">

                <form action="/saveChange" method="POST">
                    <div class="mb-3">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $technician->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Location</label>
                        <select class="form-select" aria-label="Default select example" id="mySelect" name="selected">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Bekasi">Bekasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Experience</label>
                        <textarea class="form-control" name="experience" aria-label="With textarea">{{ $technician->experience }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>





                
                    {{-- <div class="det">Age </div>
                    <div>30</div>
                
                <div class="desc">
                    <div class="det">Rating</div>
                    <div>{{ $technician->rating }} / 5.00</div>
                </div>
                <div class="desc">
                    <div class="det">Category</div>
                    <div>{{ $technician->category }}</div>
                </div>
                <div class="desc">
                    <div class="det">Location</div>
                    <div>{{ $technician->location }}</div>
                </div>
                <div class="desc">
                    <div class="det">Experience</div>
                    <div>Value</div>
                </div> --}}
            </div>
            {{-- <div>
                <button class="btn">Back to Order</button>
            </div> --}}
        </div>
    </div>
   
@endsection

<script src="{{ asset('js/changeProfile.js') }}"></script>
