@extends('master')
@section('content')

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{$property->img}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">{{$property->title}}</h1>
             
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Amount:</span> {{$property->amount}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Number:</span> {{$property->number}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Rent Month: </span> {{$property->rent_month}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">House Location: </span>  {{$property->house_location}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Size: </span> {{$property->size}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Room: </span> {{$property->room}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Bath Room: </span> {{$property->bath_room}}</p>
                <p><i class="fa fa-check text-primary me-3"></i><span style="font-weight: bold">Kitchen Room: </span> {{$property->kitchen_room}}</p>

                <p>{{$property->desc}}</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection