{{-- <div id="preloader">
    <div id="status"></div>
</div> --}}
<!-- Preloader Ends -->

<!-- header starts -->
<header class="main_header_area">

    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('frontend/assets/images/logo-white.png')}}" alt="image">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" alt="image">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="dropdown submenu active">
                                <a href="/" class="">Home</a>
                            </li>

                            <li><a href="{{route('about.us')}}" class="">About Us</a></li>
                            <li><a href="{{route('userreview.create')}}" class="">Review</a></li>

                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schedule<i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('eventschedule')}}">Event Schedule</a></li>
                                    {{-- <li><a href="{{route('eventdetail')}}">Event Detail</a></li> --}}
                                    {{-- <li><a href="speakers.html">Speaker Lists</a></li>
                                    <li><a href="speaker-detail.html">Speaker Detail</a></li>
                                    <li><a href="sponsors.html">Sponsors</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="comingsoon.html">Coming Soon</a></li>
                                    <li><a href="search-result.html">Search Result</a></li>
                                    <li><a href="404.html">404 Error</a></li> --}}
                                </ul> 
                            </li>
                          
                           
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('allpost')}}">All Posts</a></li>
                                    <li><a href="{{route('singlepost')}}">Single Post</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="{{route('contact.create')}}" class="">Contact</a></li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin dashboard<i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                     <li>
                                    <a href="{{route('dashboard')}}" class="btn" style="width:100px;">Super Admin</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_login_form')}}" class="btn" style="width:100px; margin:0 3px;">Admin</a>
                                </li>
                                <li>
                                    <a href="{{route('editor_login_form')}}" class="btn btn-warning " style="width:100px;">Editor</a>
                                </li>
                                </ul>
                            </li>

                            @if(Auth::guard('customer')->check())
                            <li><a href="{{route('customer.mybooking')}}">My Booking</a></li>
                        @endif
                         
                            <li>
                                @if(Auth::guard('customer')->check())

                        <form method="POST" action="{{route('customer.logout')}}">
                            @csrf
                            <button type="submit" class="btn btn-warning"> Logout </button>
                            </form>

                                @else <a href="{{route('customer_login_form')}}"> Login </a>
                            @endif
                        </li>
                 
                        </ul>
                    </div>
               



                                    
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>