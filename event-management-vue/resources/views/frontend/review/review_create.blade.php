@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
<section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white">User Review</h1>
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
                <h3 class="h-title">Review</h3>
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
         
    <section class="product-lists pt-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pe-lg-4">
                    <div class="listing-inner">
                        <div class="row">
                            @foreach ($reviews as $item)
                            <div class="col-lg-6 col-md-6 mb-4">
                            
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/review3.jpg')}}" alt="image" style="width: 400px">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme1 p-1 px-2 white mt-3 me-4">Star</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="">{{$item->review_title}}</a></h4>
                                           
                                        </div>
                                        <div class="articles-content pt-4">
                                            <h6 class="mb-1"><a href="">{{$item->occupation}}</a></h6>
                                           
                                        </div>
                                        <div class="articles-content pt-4">
                                            <p class="mb-1"><a href="">{{$item->descripation}}</a></p>
                                           
                                        </div>
        
                                    </div>
                                    <span>
                                        @for ($i = 1; $i <= $item['rating']; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                    @endfor
                                      </span>
                                </div>
                               
                            </div>
                            @endforeach
                        </div>

                       
                    </div>
                </div>

                <div class="col-lg-8 pe-lg-4 mb-4 mt-lg-5">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                    <h2 class="text-center text-lg-start">Event Review</h2>
                    
                    <form method="post" action="{{route('userreview.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <Label>Review Title*</Label>
                            <input type="text" placeholder="" name="review_title">
                        </div>
                       
                        <div class="form-group mb-2">
                            <Label>consumer occupation*</Label>
                            <input type="text" placeholder="" name="occupation">
                        </div>
                        <div class="form-group mb-2">
                            <Label>Give Start Rating*</Label><br>
                            One Star<input type="radio" value="1" name="rating" class="" id="radio" value="1" placeholder="subject"><br>
                            Two Star<input type="radio" value="1" name="rating" class="" id="radio" value="2" placeholder="subject"><br>
                            Three Star<input type="radio" value="3" name="rating" class="" id="radio" placeholder="subject"><br>
                            Four Star<input type="radio" value="1" name="rating" class="" id="radio" value="4" placeholder="subject"><br>
                            Five Star<input type="radio" name="rating" class="" id="radio" value="5" placeholder="subject"><br>
                        </div>
                        <div class="form-group mb-2">
                            <Label>Review Description*</Label>
                            <input type="text" placeholder="" name="descripation">
                        </div>
                      <div class="form-group mb-2">
                            <input type="submit" class="nir-btn" id="" value="Send Message">
                        </div>
                       </form>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4 ps-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="subscribe-form overflow-hidden position-relative mb-4">
                                <form>
                                    <input type="text" placeholder="Search your keyword here..">
                                    <input type="submit" class="nir-btn bordernone position-absolute end-0" value="Search">
                                </form>
                            </div>
                            
                            <div class="sidebar-item mb-4 bg-grey p-4">
                                <h5 class="bg-white p-3 mb-4">Review Gallery</h5>
                                <div class="row gallery-main">
    
                                    
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('rontend/assets/images/products/Summer Cloth.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/review3.jpg')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/T-Shirt.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/review3.jpg')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                            </div> 
                            </div>

                            <div class="sidebar-item mb-4 bg-grey p-4">
                                <h5 class="bg-white p-3 mb-4">Recent Review</h5>
                                <article class="post mb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="product-detail.html"><img src="{{asset('frontend/assets/images/review.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="product-detail.html">The E-Evaluation</a></h6>
                                            <div class="date small">10 Apr 2024</div>
                                        </div>    
                                    </div> 
                                </article>
                          

                                <article class="post mb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="product-detail.html"><img src="{{asset('frontend/assets/images/review2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="product-detail.html">Rating Review</a></h6>
                                            <div class="date small">10 Apr 2024</div>
                                        </div>    
                                    </div> 
                                </article>
                                <article class="post mb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="product-detail.html"><img src="{{asset('frontend/assets/images/review.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="product-detail.html">Star Spotters</a></h6>
                                            <div class="date small">10 Apr 2024</div>
                                        </div>    
                                    </div> 
                                </article>

                                <article class="post">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="product-detail.html"><img src="{{asset('frontend/assets/images/review3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="product-detail.html">Grade Gurus</a></h6>
                                            <div class="date small">10 Apr 2024</div>
                                        </div>    
                                    </div> 
                                </article>
                            </div>

                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
              
            {{-- <div class="contact-info-content row mb-5">
                <div class="card-group">
                    <div class="card">
                      <img class="card-img-top" src="{{asset('frontend/assets/images/review3.jpg')}}" alt="Card image cap" style="width: 300px">
                      <div class="card-body">
                        <h5 class="card-title">{{$item->review_title}}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                   
                  </div>
            </div> --}}
         
            
            <div class="contact-info">
             
              
                    <div class="row">
                            
                </div>



                 {{-- <div class="col-lg-8 pe-lg-4 mb-4">
                            
                            <div id="contactform-error-msg"></div>

                            <form method="post" action="{{route('userreview.store')}}" name="contactform2" id="contactform2">
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" name="review_title" class="form-control" id="review" placeholder="Review-Title">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="descripation"  class="form-control" id="desc" placeholder="Description">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="consumer occupation">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Give Start Rating</label><br>
                                    One Star<input type="radio" value="1" name="rating" class="" id="radio" value="1" placeholder="subject"><br>
                                    Two Star<input type="radio" value="1" name="rating" class="" id="radio" value="2" placeholder="subject"><br>
                                    Three Star<input type="radio" value="3" name="rating" class="" id="radio" placeholder="subject"><br>
                                    Four Star<input type="radio" value="1" name="rating" class="" id="radio" value="4" placeholder="subject"><br>
                                    Five Star<input type="radio" name="rating" class="" id="radio" value="5" placeholder="subject"><br>
                                </div>
                               
                                <div class="comment-btn text-center text-lg-start">
                                    <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                </div>
                            </form>
                        </div> --}}
                        <div class="col-lg-4 ps-lg-4 mb-4">
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="500" style="filter: grayscale(1);" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Ends -->
@endsection