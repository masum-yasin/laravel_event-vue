@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Eventiz</h5>
                    <h1 class="mb-0 white">Event Schedules</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- event-schedule starts -->
    <section class="event-schedule pb-8 about-after">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-4">
                    <div class="section-title mb-5 text-center text-lg-start">
                        <h3 class="h-title">Schedule</h3>
                        <h4 class="theme">Event Conference Organisation</h4>
                        <div class="selector4" style="display: flex; justify-content: center;">
                            <h2 class="ah-headline mb-0">
                                <span>List Of Planned Events Thay Are </span>
                                <span class="ah-words-wrapper white theme">
                                <b class="is-visible textcap">Expected</b>
                                <b>Expected</b>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="schedule-item">
                @foreach ($schedule as $item)
                        
                <div class="about-image-box bg-white mb-4">
                  
                    
                    <div class="row">
                        <div class="col-lg-3 d-flex">
                            <div class="about-content text-center text-lg-start p-4 py-8 bg-theme w-100">
                                <h6>Start Time</h6>
                                <small class="white mb-1">{{$item->start_time}}</small>
                                <h6>Ending Time</h6>
                                <small class="white mb-1">{{$item->ending_time}}</small>
                                <h4 class="white mt-7">{{$item->category->name}}</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex">
                            <div class="schedule-content text-lg-start text-center py-4">
                                <h4 class="mb-1">{{$item->title}}</h4>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                <ul class="schedule-items d-flex justify-content-lg-start justify-content-center">
                                    <li class="d-flex align-items-center me-4">
                                        <i  class="icon-location-pin theme pe-1"></i>
                                        <span class="theme1">Exploration Hall</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i  class="icon-location-pin theme pe-1"></i>
                                        <span class="theme1">Hall 01</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex">
                            <div class="schedule-speaker d-lg-flex p-4 align-items-center text-center text-lg-start w-100 border-start">
                                <img src="{{asset('frontend/assets/images/reviewer/1.jpg')}}" alt="" class="rounded-circle img-circle">
                                <div class="speaker-content ms-3">
                                    <h6 class="mb-0 theme">Jesus Holland</h6>
                                    <small>Host & Speaker</small>
                                </div>
                            </div>
                        </div>
        
                    </div>
                  
                </div>
                @endforeach
              </div>
        </div>
    </section>
    <!-- event-schedule ends -->

    <!-- event-contact ends -->
    <section class="event-contact bg-grey pb-8">
        <div class="container">
            <div class="event-contact-main">
                <div class="row align-items-end">
                    <div class="col-lg-6 pe-lg-4 mb-4">
                        <div class="section-title mb-5 text-center text-lg-start">
                            <h3 class="h-title">Venue</h3>
                            <h4 class="theme">Reach Us</h4>
                            <div class="selector4" style="display: flex; justify-content: center;">
                                <h2 class="ah-headline mb-0">
                                    <span>Get Direction To The Event </span>
                                    <span class="ah-words-wrapper white theme">
                                    <b class="is-visible textcap">Location</b>
                                    <b>Location</b>
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="event-expo-item mb-4">
                            <div class="row align-items-center border-all m-0">
                                <div class="col-lg-3 d-flex bg-theme p-4 py-5">
                                    <div class="expo-icon text-center w-100">
                                        <i class="fa fa-map-marker white fs-1"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 p-4 text-center text-lg-start">
                                    <h5 class="mb-1">Galleria Mall Conference Center</h5>
                                    <p class="mb-0">19 By Pass NR, Bali, Indonesia, BC 22196</p>
                                </div>
                            </div>
                        </div>
                        <div class="event-expo-item">
                            <div class="row align-items-center border-all m-0">
                                <div class="col-lg-3 d-flex bg-theme p-4 py-5">
                                    <div class="expo-icon text-center w-100">
                                        <i class="fa fa-map-pin white fs-1"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 p-4 text-center text-lg-start">
                                    <h5 class="mb-1">Reception Info</h5>
                                    <p class="mb-0">Phone Number: (+62) 1919-2022, (+62) 1919-2023</p>
                                </div>
                            </div>
                        </div>{{asset('')}}
                    </div>
                    <div class="col-lg-6 ps-lg-4 mb-4">
                        <div class="map">
                            <div style="width: 100%">
                                <iframe height="500" style="filter: grayscale(1);" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-contact ends -->
@endsection