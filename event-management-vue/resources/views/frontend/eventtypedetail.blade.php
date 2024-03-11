@extends('frontend.layouts.app')
@section('content')
 <!-- BreadCrumb Starts -->  
 <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white">Event Detials</h1>
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
                      <li class="breadcrumb-item"><a href="#">Event</a></li>
                    
                    </ol>
                  </nav>
            
                      
                 
                <h2>Lewis Shirt</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br><br>
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                    <div class="posted_cats d-flex border-top border-bottom py-2 my-3">
                        <span class="detail-label fw-bold pe-4">Category</span> 
                        <span class="detail-content"><a href="#" rel="tag">clothes</a></span>
                    </div>  
                    <h4>$29.00</h4>  
                    <div class="product-quantity d-flex">
                        <input type="number" name="quantity" size="4" min="1" max="" step="1" class="me-2 pro-num bg-grey">     
                        <button type="submit" name="add-to-cart" value="" class="nir-btn">Add to cart</button>              
                    </div>
            </div>

            <div class="col-lg-5 ps-lg-4 mb-4">
                <div class="product-slider position-relative">
                    <div class="slider-for overflow-hidden">
                        <div>
                            <div class="gallery-item">
                                <div class="gallery-image position-relative">
                                    <img src="{{asset('frontend/assets/images/products/Yellow Cloth Puff.H03.2k.png')}}" alt="image">
                                   
                                </div>
                            </div>
                        </div>
                      
                        
                      
                        
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
    <div class="single-add-review mb-4 text-center text-lg-start">
        <h2 class="text-center text-lg-start">Leave A Reply</h2>
       
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
            <div class="form-group mb-2">
                <Label>Website</Label>
                <input type="text" placeholder="">
            </div>
            <p class="mb-0">
                <input  name="" type="checkbox" value="yes">
                <label>Save my name, email, and website in this browser for the next time I comment.</label>
            </p>
            <div class="form-btn">
                <button type="submit" class="nir-btn">Post Comment</button>
            </div>
        </form>
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
                            <h6>Description</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br><br>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br><br>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
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
                    <h5 class="bg-grey p-3 mb-4">Recent products</h5>
                    <article class="post mb-2 bg-grey">
                        <div class="s-content d-flex align-items-center justify-space-between">
                            <div class="sidebar-image w-25 me-3 rounded">
                                <a href="product-detail.html"><img src="{{asset('frontend/assets/images/products/Yellow Cloth Puff.H03.2k.png')}}" alt=""></a>
                            </div>
                            <div class="content-list w-75">
                                <h6 class="mb-1"><a href="product-detail.html">Yellow Sofa Set</a></h6>
                                <div class="date small">10 Apr 2023</div>
                            </div>    
                        </div> 
                    </article>

                    <article class="post mb-2 bg-grey">
                        <div class="s-content d-flex align-items-center justify-space-between">
                            <div class="sidebar-image w-25 me-3 rounded">
                                <a href="product-detail.html"><img src="{{asset('frontend/assets/images/products/Travel Bag.H03.2k.png')}}" alt=""></a>
                            </div>
                            <div class="content-list w-75">
                                <h6 class="mb-1"><a href="product-detail.html">leather Bag</a></h6>
                                <div class="date small">10 Apr 2023</div>
                            </div>    
                        </div> 
                    </article>
                    <article class="post mb-2 bg-grey">
                        <div class="s-content d-flex align-items-center justify-space-between">
                            <div class="sidebar-image w-25 me-3 rounded">
                                <a href="product-detail.html"><img src="{{asset('frontend/assets/images/products/Picnic Basket.H03.2k.png')}}" alt=""></a>
                            </div>
                            <div class="content-list w-75">
                                <h6 class="mb-1"><a href="product-detail.html">Bamboo Bucket</a></h6>
                                <div class="date small">10 Apr 2023</div>
                            </div>    
                        </div> 
                    </article>

                    <article class="post bg-grey">
                        <div class="s-content d-flex align-items-center justify-space-between">
                            <div class="sidebar-image w-25 me-3 rounded">
                                <a href="product-detail.html"><img src="{{asset('frontend/assets/images/products/T-Shirt.H03.2k.png')}}" alt=""></a>
                            </div>
                            <div class="content-list w-75">
                                <h6 class="mb-1"><a href="product-detail.html">Lewis Shirt</a></h6>
                                <div class="date small">10 Apr 2023</div>
                            </div>    
                        </div> 
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection