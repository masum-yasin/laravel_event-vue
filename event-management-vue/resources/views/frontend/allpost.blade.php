@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Eventiz</h5>
                    <h1 class="mb-0 white">Blog Lists</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- blog starts -->
    <section class="blog pt-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pe-lg-4">
                    <div class="listing-inner">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Ecommerce</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">How To Optimize Your Blog For High Ranking</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog2.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Inspiration</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">Runner with Autism Graces of Women</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog3.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Public</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">Services To Grow Your Business Sell Affiliate</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Ecommerce</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">How To Optimize Your Blog For High Ranking</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog2.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Inspiration</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">Runner with Autism Graces of Women</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="articles-item border-all bg-white overflow-hidden position-relative">
                                    <div class="articles-image">
                                        <img src="{{asset('frontend/assets/images/blog/blog3.jpg')}}" alt="image">
                                        <div class="articles-cats position-absolute top-0 end-0 bg-theme p-1 px-2 white mt-2 me-3">Public</div>
                                    </div>
                                    <div class="articles-content-main">
                                        <div class="articles-content p-4 pb-2">
                                            <h4><a href="detail-1.html">Services To Grow Your Business Sell Affiliate</a></h4>
                                            <a href="#" class="theme textupper small">Continue Reading</a>
                                        </div>
                                        <ul class="border-top d-block w-100 p-4 py-2">
                                            <li>August 25, 2022</li> |
                                            <li> No Comments</li>
                                        </ul>
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

                            <div class="author-news mb-4 bg-grey p-5 text-center">
                                <div class="author-news-content">
                                    <div class="author-thumb mb-3">
                                        <img src="{{asset('frontend/assets/images/team/img2.jpg')}}" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <h5 class="title mb-1"><a href="#">Hi, Jenny Loral</a></h5>
                                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor dolore magna aliqua.</p>
                                        <div class="social-links">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item mb-4 bg-grey p-4">
                                <h5 class="bg-white p-3">All Categories</h5>
                                <ul class="sidebar-category">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Online Ticketing</a></li>
                                    <li><a href="#">Conference</a></li>
                                    <li class="active"><a href="#">Marketing Events</a></li>
                                    <li><a href="#">Optimization</a></li>
                                    <li><a href="#">SEO Conference</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                </ul>
                            </div>

                            <div class="sidebar-item mb-4 bg-grey p-4">
                                <h5 class="bg-white p-3">Recent Posts</h5>
                                <article class="post mb-2 border-b pb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="detail-1.html"><img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="detail-1.html">An Incredibly Easy Method That Works For All</a></h6>
                                            <div class="date">10 Apr 2023</div>
                                        </div>    
                                    </div> 
                                </article>

                                <article class="post border-b pb-2 mb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="detail-1.html"><img src="{{asset('frontend/assets/images/blog/blog2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="detail-1.html">15 Unheard Ways To Achieve Greater Walker</a></h6>
                                            <div class="date">29 Mar 2023</div>
                                        </div>    
                                    </div> 
                                </article>

                                <article class="post mb-2 border-b pb-2">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="detail-1.html"><img src="{{asset('frontend/assets/images/blog/blog3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="detail-1.html">An Incredibly Easy Method That Works For All</a></h6>
                                            <div class="date">10 Apr 2023</div>
                                        </div>    
                                    </div> 
                                </article>

                                <article class="post">
                                    <div class="s-content d-flex align-items-center justify-space-between">
                                        <div class="sidebar-image w-25 me-3 rounded">
                                            <a href="detail-1.html"><img src="{{asset('frontend/assets/images/blog/blog4.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="content-list w-75">
                                            <h6 class="mb-1"><a href="detail-1.html">15 Unheard Ways To Achieve Greater Walker</a></h6>
                                            <div class="date">21 Feb 2023</div>
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
    <!-- blog Ends --> 
@endsection