@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
<section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white"> My Bookings </h1>
            </div>
        </div>
    </div>
    <div class="bread-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<!-- contact starts -->
<section class="contact-main pb-8" style="background-image: url({{asset('frontend/assets/images/testimonial-1.png')}});">
    <div class="container">
        <div class="contact-info-main mt-0">
            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">My Booking</h3>
                <h4 class="theme">Touch WIth Us</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>How Can We </span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">help?</b>
                        <b>help?</b>
                        </span>
                    </h2>
                </div>
            </div>
              <h1> My Bookings </h1>
              <table class="table">
                  <h6>Customer Detail</h6>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Number of Member</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $item)
                        
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->customer_name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->member}}</td>
                        <td>{{$item->address}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
              </table>
         
        <div class="row mt-5">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photography</th>
                    <th scope="col">videography</th>
                    <th scope="col">Dj Service</th>
                    <th scope="col">Table And Chair</th>
                    <th scope="col">Live Music</th>
                    <th scope="col">Lighting</th>
                    <th scope="col">Event Staff</th>
                    <th scope="col">Power Supply</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Master Photography</td>
                    <td>Video Walls or LED Screens</td>
                    <td>Chairs Covers and Sashes</td>
                    <td>Audio-Visual Cables and Accessories</td>
                    <td>Buffet Tables and Stations</td>
                    <td>Concert of Live</td>
                    <td>Cleaning Equipment and Supplies</td>
                    <td>Generators and Power Distribution</td>
                  </tr>
                 
                 
                </tbody>
              </table>
              <button>Show Invoice</button>
            </div>
                </div>
                </div>
              </div>
        </div>
    </div>
</section>

@endsection