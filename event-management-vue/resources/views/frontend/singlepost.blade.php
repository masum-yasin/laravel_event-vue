@extends('frontend.layouts.app')
@section('content')
     <!-- BreadCrumb Starts -->  
     <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Eventiz</h5>
                    <h1 class="mb-0 white"> Single Blog</h1>
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
                <div class="col-lg-8">
                    <div class="blog-single">
                        <img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt="image" class="mb-4">
                        <p class="mb-3 text-lg-start text-center">Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. Lorem ipsum dolor sit amet, cons sit amet, consectetur adi ectetur adipis Vi.<br><br>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
                            and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>


                        <div class="blog-wrapper">

                            <!-- author detail -->
                            <div class="blog-author mb-4 bg-grey border-all p-4 pb-2">
                                <div class="blog-author-item">
                                    <div class="row d-flex justify-content-between align-items-center text-center text-lg-start">
                                        <div class="col-lg-2 mb-2">
                                            <div class="blog-thumb">
                                                <img src="{{asset('frontend/assets/images/reviewer/1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 mb-2">
                                            <h5 class="mb-1">Team World </h3>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
                                        </div>
                                        
                                    </div>        
                                </div>
                            </div>


                            <!-- blog review -->
                            <div class="single-add-review mb-4 text-center text-lg-start">
                                <h2 class="text-center text-lg-start">Leave A Reply</h2>
                                <P class="text-center text-lg-start">Your email address will not be published. Required fields are marked *</P>
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

                            <!-- blog comment list -->
                            <div class="single-comments single-box mb-4">
                                <h4 class="mb-4 text-center text-lg-start">Showing 16 verified guest comments</h4>
                                <div class="comment-box">
                                    <div class="comment-image mt-2">
                                        <img src="{{asset('frontend/assets/images/reviewer/1.jpg')}}" alt="image">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
                                        <p class="comment-date">April 25, 2023 at 10:46 am</p>
                                        <div class="comment-rate">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="comment-title">"The worst hotel ever"</span>
                                        </div>    
                                        
                                        <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                        <div class="comment-like">
                                            <div class="like-title float-md-start float-none">
                                                <a href="#" class="nir-btn mr-2">Reply</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="comment-image mt-2">
                                        <img src="{{asset('frontend/assets/images/reviewer/2.jpg')}}" alt="image">
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="mb-1">Burson Lesson</h4>
                                        <p class="comment-date">April 25, 2023 at 10:46 am</p>
                                        <div class="comment-rate">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
                                        </div> 
                                        
                                        <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                        <div class="comment-like">
                                            <div class="like-title float-left">
                                                <a href="#" class="nir-btn">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog next prev -->
                            <div class="blog-next row mb-4 d-flex align-items-center justify-content-between">
                                <a href="#" class="d-block border-end col-6">
                                    <div class="prev ps-4">
                                        <i class="fa fa-arrow-left"></i> 
                                        <p  class="m-0">Previous</p>
                                        <p class="m-0 theme1 fw-bold text-truncate">Learning to Take Your Life Into Your Own Hands</p>
                                    </div>
                                </a>
                                <a href="#" class="d-block col-6">
                                    <div class="next pr-4 text-right">
                                        <i class="fa fa-arrow-right"></i>
                                        <p class="m-0">Previous</p>
                                        <p class="m-0 theme1 fw-bold text-truncate">The bedding was hardly able</p>
                                    </div>
                                </a>
                            </div>
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