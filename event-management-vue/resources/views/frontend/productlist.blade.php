@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Eventiz</h5>
                    <h1 class="mb-0 white">Archives: Shop</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- product-lists starts -->
    <section class="product-lists pt-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pe-lg-4">
                    <div class="listing-inner">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/Picnic Basket.H03.2k.png')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme1 p-1 px-2 white mt-3 me-4">Sale</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">Bamboo Bucket</a></h4>
                                            <h6 class="theme mb-3">$32.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/Summer Cloth.H03.2k.png')}}" alt="image">
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">ladies Tops</a></h4>
                                            <h6 class="theme mb-3"><span class="text-decoration-line-through opacity-50 me-1">$21.00</span>$18.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/T-Shirt.H03.2k.png')}}" alt="image">
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">Lewis Tshirt</a></h4>
                                            <h6 class="theme mb-3">$28.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/Travel Bag.H03.2k.png')}}" alt="image">
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">Leather bag</a></h4>
                                            <h6 class="theme mb-3">$45.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/Woman Short Sleeve Shirt.H03.2k.png')}}" alt="image">
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">London Tshirt</a></h4>
                                            <h6 class="theme mb-3">$15.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item box-shadow bg-white overflow-hidden position-relative p-3 text-center">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/products/Yellow Cloth Puff.H03.2k.png')}}" alt="image">
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content pt-4">
                                            <h4 class="mb-1"><a href="product-detail.html">Yellow Sofa Set</a></h4>
                                            <h6 class="theme mb-3">$89.00</h6>
                                            <a href="#" class="nir-btn">Add To Cart</a>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="pagination-main text-center">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
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
                                <h5 class="bg-white p-3 mb-4">Product Gallery</h5>
                                <div class="row gallery-main">
    
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/Picnic Basket.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/Picnic Basket.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('rontend/assets/images/products/Summer Cloth.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/Summer Cloth.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/T-Shirt.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/T-Shirt.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/Travel Bag.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/Travel Bag.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/Woman Short Sleeve Shirt.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/Woman Short Sleeve Shirt.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-6 col-md-6 mansonry-item p-2">
                                        <div class="gallery-item">
                                            <div class="gallery-image">
                                                <a href="{{asset('frontend/assets/images/products/Yellow Cloth Puff.H03.2k.png')}}" data-lightbox="gallery" data-title="Title">
                                                    <img src="{{asset('frontend/assets/images/products/Yellow Cloth Puff.H03.2k.png')}}" alt="image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div class="sidebar-item mb-4 bg-grey p-4">
                                <h5 class="bg-white p-3 mb-4">Recent products</h5>
                                <article class="post mb-2">
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

                                <article class="post mb-2">
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
                                <article class="post mb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="{{asset('product-detail.html"><img src="frontend/assets/images/products/Picnic Basket.H03.2k.png')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="product-detail.html">Bamboo Bucket</a></h6>
                                            <div class="date small">10 Apr 2023</div>
                                        </div>    
                                    </div> 
                                </article>

                                <article class="post">
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

                            <div class="sidebar-item bg-grey p-4 pb-3">
                                <h5 class="bg-white p-3">Social Media</h5>
                                <div class="social-links mt-2">
                                    <ul class="row">
                                        <li class="mb-1 col-6">
                                            <a href="#" class="w-100 h-100 p-1 px-3 text-start bg-theme white">
                                                <i class="fab fa-facebook" aria-hidden="true"></i> Facebook
                                            </a>
                                        </li>
                                        <li class="mb-1 col-6"><a href="#" class="w-100 h-100 p-1 px-3 text-start bg-theme white"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                        <li class="mb-1 col-6"><a href="#" class="w-100 h-100 p-1 px-3 text-start bg-theme white"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                                        <li class="mb-1 col-6"><a href="#" class="w-100 h-100 p-1 px-3 text-start bg-theme white"><i class="fab fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-lists Ends -->  
@endsection