@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Eventiz</h5>
                    <h1 class="mb-0 white">Event Details</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- product-detail starts -->
    <section class="product-detail pt-12 pb-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-4 mb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-2">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                         </ol>
                      </nav>
                      <div class="single-add-review mb-4 text-center text-lg-start">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                            
                        @endif
                        <h2 class="text-center text-lg-start">Event Booking Now</h2>
                        
        <form method="post" action="{{route('booking.store')}}">
                            @csrf
                            
                            <div class="form-group mb-2">
                                <Label>Name*</Label>
                                <input type="text" placeholder="" name="customer_name" value="{{ Auth::guard('customer')->user()->name }}">
                            </div>
                            <div class="form-group mb-2">
                                <Label>Email*</Label>
                                <input type="email" placeholder="" name="email">
                            </div>
                            <div class="form-group mb-2">
                                <Label>Phone Number*</Label>
                                <input type="number" placeholder="" name="phone_number">
                            </div>
                            <div class="form-group mb-2">
                                <Label>Event Category*</Label>
                                <input type="text" placeholder="" name="event_category">
                            </div>
                            {{-- <div class="form-group mb-2">
                                <Label>Event Catalog*</Label>
                                <input type="file" placeholder="" name="event_catalog">
                            </div> --}}
                            <div class="form-group mb-2">
                                <Label>Number of Person*</Label>
                                <input type="text" placeholder="" name="member">
                            </div>
                            {{-- get customer id --}}
                            <input type="hidden" name="customer_id"
                            value="{{ Auth::guard('customer')->user()->id }}">

                        {{-- get Eventtype id --}}
                        <input type="hidden" name="eventtype_id"
                            value="{{ $eventtype['id'] }}">

                            <div class="form-group mb-2">
                                <Label>Description*</Label>
                               <textarea name="description" id="" cols="15" rows="5"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <Label>Address*</Label>
                               <textarea name="address" id="" cols="15" rows="5"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <Label> Booking Price 50% only </Label>
                                <input type="text" name="booking_price" value="{{round($eventtype->price * 0.50)}}">
                            </div>
                            <div class="form-group mb-2 d-flex">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGoz3y6ZkhQWNLCsojJhidOXKd62tjclnjvw&usqp=CAU" alt="" width="50%" height="120px">
                               <img src="https://play-lh.googleusercontent.com/9GNDxgkN8hWzBub3bYbmFummUAHRFTe0vhLNv8wYL1-ESxKx1zJLL6eGhn8oAWiEZLNj=w600-h300-pc0xffffff-pd" alt="" width="50%" height="120px">
                            </div>
                            <div class="form-group mb-2 d-flex justify-content-evenly">
                          
                                <input type="radio" name="payment_method" value="bkash"> Bkash
                                <input type="radio" name="payment_method" value="nagad"> Nagad
                                
                             </div>
                            <div class="form-group mb-2">
                                <Label>Enter Your Transction ID</Label>
                                <input type="text" name="t_id">
                            </div>
                            
                            <div class="form-group mb-2">
                                <input type="submit" class="nir-btn" id="" value="Send Message">
                            </div>
        </form>
                    </div>
                       
                </div>
               
                    
           
                <div class="col-lg-5 ps-lg-4 mb-4">

                    <div class="border border-4 text-center p-1">
                        <h3 class="text-primary"> Event Total Cost {{round($eventtype->price)}} </h3>
                        <h3 class="text-primary"> Event Booking price pay Advance only 50%  :  {{round($eventtype->price * 0.35)}} </h3>
                    </div>
                
                    <div class="product-slider position-relative mt-4">
                        <div class="slider-for overflow-hidden">
                            <div>
                                <div class="gallery-item">
                                    <div class="gallery-image position-relative">
                                        <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                                      
                                        <a href="" data-lightbox="gallery" class="gallery_trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                      
                          
                            <div>
                                <div class="gallery-item">
                                    <div class="gallery-image position-relative">
                                        <img src="{{asset('uploads/'.$eventtype->image)}}}}" alt="image">
                                        <a href="" data-lightbox="gallery" class="gallery_trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="gallery-item">
                                    <div class="gallery-image position-relative">
                                        <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                                        <a href="{{asset('frontend/assets/images/products/Summer Cloth.H03.2k.png')}}" data-lightbox="gallery" class="gallery_trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="gallery-item">
                                    <div class="gallery-image position-relative">
                                        <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                                        <a href="" data-lightbox="gallery" class="gallery_trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="gallery-item">
                                    <div class="gallery-image position-relative">
                                        <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                                        <a href="{{asset('frontend/assets/images/products/Travel Bag.H03.2k.png')}}" data-lightbox="gallery" class="gallery_trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav bg-white">
                            <div>
                                <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                            </div>
                            <div>
                                <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                            </div>
                            <div>
                                <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                            </div>
                            <div>
                                <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                            </div>
                            <div>
                                <img src="{{asset('uploads/'.$eventtype->image)}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
   

            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <!-- product-detail starts -->
    <section class="product-detail pt-12 bg-grey pb-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pe-lg-4 mb-4">
                    <div class="post-tabs bg-white">
                        <!-- tab navs -->
                        <ul class="nav nav-tabs nav-pills nav-fill border-bottom" id="postsTab1" role="tablist">
                            <li class="nav-item d-inline-block" role="presentation">
                                <button aria-selected="false" class="nav-link active" data-bs-target="#description" data-bs-toggle="tab" id="description-tab" role="tab" type="button">Description</button>
                            </li>
                            <li class="nav-item d-inline-block" role="presentation">
                                <button aria-selected="true" class="nav-link" data-bs-target="#review" data-bs-toggle="tab" id="review-tab" role="tab" type="button">Review</button>
                            </li>
                        </ul>
                        <!-- tab contents -->
                        <div class="tab-content p-4 pt-0" id="postsTabContent1">
                            <!-- popular posts -->
                            <div aria-labelledby="description-tab" class="tab-pane fade active show" id="description" role="tabpanel">
                                <h3>Event Description</h3>
                                <p>{{$eventtype->description}}</p>
                                    
                            </div>
                            <!-- Recent posts -->
                            <div aria-labelledby="review-tab" class="tab-pane fade" id="review" role="tabpanel">
                                <h6>Review</h6>
                                <p>There are no reviews yet.</p><br>
                                <p>Be the first to review “Lewis Shirt”</p>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="comment-rate mb-1">
                                    <span class="comment-title">Your rating *</span>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div> 
                        
                                <form>
                                    <div class="form-group">
                                        <Label>Comment*</Label>
                                        <textarea rows="5"></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <Label>Name*</Label>
                                        <input type="text" placeholder="">
                                    </div>
                                    <div class="form-group mb-2">
                                        <Label>Email*</Label>
                                        <input type="email" placeholder="">
                                    </div>
                                    <p class="mb-0">
                                        <input  name="" type="checkbox" value="yes">
                                        <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <button type="submit" class="nir-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-4 mb-4">
                    <div class="sidebar-item mb-4 bg-white p-4">
                        <h5 class="bg-grey p-3 mb-4">Recent Events</h5>
                        <article class="post mb-2 bg-grey">
                            <div class="s-content d-flex align-items-center justify-space-between">
                                <div class="sidebar-image w-25 me-3 rounded">
                                    <a href="product-detail.html"><img src="{{asset('frontend/assets/images/recent (3).jpg')}}" alt=""></a>
                                </div>
                                <div class="content-list w-75">
                                    <h6 class="mb-1"><a href="product-detail.html">Engaging Evening</a></h6>
                                    <div class="date small">10 Apr 2024</div>
                                </div>    
                            </div> 
                        </article>

                        <article class="post mb-2 bg-grey">
                            <div class="s-content d-flex align-items-center justify-space-between">
                                <div class="sidebar-image w-25 me-3 rounded">
                                    <a href="product-detail.html"><img src="{{asset('frontend/assets/images/recent (5).jpg')}}" alt=""></a>
                                </div>
                                <div class="content-list w-75">
                                    <h6 class="mb-1"><a href="product-detail.html">Effervescent Event</a></h6>
                                    <div class="date small">10 Apr 2024</div>
                                </div>    
                            </div> 
                        </article>
                        <article class="post mb-2 bg-grey">
                            <div class="s-content d-flex align-items-center justify-space-between">
                                <div class="sidebar-image w-25 me-3 rounded">
                                    <a href="product-detail.html"><img src="{{asset('frontend/assets/images/recent (6).jpg')}}" alt=""></a>
                                </div>
                                <div class="content-list w-75">
                                    <h6 class="mb-1"><a href="product-detail.html">Unforgettable Affair</a></h6>
                                    <div class="date small">10 Apr 2024</div>
                                </div>    
                            </div> 
                        </article>

                        <article class="post bg-grey">
                            <div class="s-content d-flex align-items-center justify-space-between">
                                <div class="sidebar-image w-25 me-3 rounded">
                                    <a href="product-detail.html"><img src="{{asset('frontend/assets/images/recent (7).jpg')}}" alt=""></a>
                                </div>
                                <div class="content-list w-75">
                                    <h6 class="mb-1"><a href="product-detail.html">The Perfect Party</a></h6>
                                    <div class="date small">10 Apr 2024</div>
                                </div>    
                            </div> 
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog Ends -->  
@endsection