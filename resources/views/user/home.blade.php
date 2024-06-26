@extends('master')
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Types</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            @foreach($category as $category_item)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{asset('frontend/img/icon-apartment.png')}}" alt="Icon">
                        </div>
                        <h6>{{$category_item->category_name  }}</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Category End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/img/about.jpg')}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


{{-- property listing --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">All </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach ($rent_house as $item)
                    @if($item->status == 1)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="{{url('/details',['id'=>$item->id])}}"><img class="img-fluid" src="{{$item->img}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For {{$item->catagory}}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{$item->amount}}</h5>
                                <a class="d-block h5 mb-2" href="">{{$item->title}}</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->house_location}}</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>{{$item->number}}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$item->size}} Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$item->room}} Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->bath_room}} Bath</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->kitchen_room}} Kitchen</small>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                  
    
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    @foreach ($rent_house as $item)
                    @if($item->status == 1)
                    @if($item->catagory == 'sell')
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{$item->img}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For {{$item->catagory}}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{$item->amount}}</h5>
                                <a class="d-block h5 mb-2" href="">{{$item->title}}</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->house_location}}</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>{{$item->number}}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$item->size}} Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$item->room}} Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->bath_room}} Bath</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->kitchen_room}} Kitchen</small>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    @foreach ($rent_house as $item)
                    @if($item->status == 1)
                    @if($item->catagory == 'rent')
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="{{$item->img}}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For {{$item->catagory}}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{$item->amount}}</h5>
                                <a class="d-block h5 mb-2" href="">{{$item->title}}</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->house_location}}</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>{{$item->number}}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$item->size}} Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$item->room}} Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->bath_room}} Bath</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$item->kitchen_room}} Kitchen</small>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Agents</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            @foreach($agents as $agent)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{$agent->img}}" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="{{$agent->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="{{$agent->pinter}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">{{$agent->name}}</h5>
                        <small>{{$agent->phone}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection