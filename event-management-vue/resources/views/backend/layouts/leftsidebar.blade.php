<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('assets/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    {{-- @if (Auth::guard('admin')->check()) --}}
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            {{-- =========================Admin Authentication================ --}}
            {{-- @if (Auth::guard('admin')->check()) --}}
            @if (Auth::guard('admin')->check())
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Event Category</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('category.index')}}">All  Event</a></li>
                        <li><a href="{{route('category.create')}}">New Event Add</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Equipment Company</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('company.index')}}">All Equipment Company</a></li>
                        <li><a href="{{route('company.create')}}">Equipment Company Add</a></li>
                        </ul>
                     </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Equipment Service</span>
                        </a>
                        <ul class="submenu">
                        <li><a href="{{route('servicelist.index')}}">All Equipment Servicelist</a></li>
                        <li><a href="{{route('servicelist.create')}}">Add Service List</a></li>
                        </ul>
                        </li>   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-copy"></span><span class="mtext">Event Schedule</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{route('schedule.create')}}">New Schedule Add</a></li>
                                <li><a href="{{route('schedule.index')}}">All Event Schedule</a></li>
                                </ul>
                        </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-copy"></span><span class="mtext">Blog Post</span>
                                </a>
                                <ul class="submenu">
                                <li><a href="{{route('blogpost.create')}}">Add Blog Post</a></li>
                                <li><a href="{{route('blogpost.index')}}">All Blog List</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-copy"></span><span class="mtext">Sponsor Company</span>
                                </a>
                                <ul class="submenu">
                                <li><a href="{{route('sponsor.create')}}">Add Sponsor Detail</a></li>
                                <li><a href="{{route('sponsor.index')}}">All Sponsor List</a></li>
                            </ul>
                        </li>
                     </ul> 
                     {{-- =================Editor Authencation=============== --}}
                     @elseif(Auth::guard('editor')->check())
                     <ul id="accordion-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-house-1"></span><span class="mtext">Event Category</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{route('category.index')}}">All  Event</a></li>
                                <li><a href="{{route('category.create')}}">New Event Add</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="micon dw dw-copy"></span><span class="mtext">Event Schedule</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{route('schedule.create')}}">New Schedule Add</a></li>
                                <li><a href="{{route('schedule.index')}}">All Event Schedule</a></li>
                                </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        <span class="micon dw dw-copy"></span><span class="mtext">Event Review</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="{{route('userreview.index')}}">All Review</a></li>
                                       
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        <span class="micon dw dw-copy"></span><span class="mtext">Blog Post</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="{{route('blogpost.create')}}">Add Blog Post</a></li>
                                        <li><a href="{{route('blogpost.index')}}">All Blog List</a></li>
                                        </ul>
                                         </li>
                                </ul>  
                                 {{--========================Volenteer===================  --}}
                                @elseif(Auth::guard('volunteer')->check())
                                    <ul id="accordion-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">
                                                <span class="micon dw dw-copy"></span><span class="mtext">Employee List</span>
                                            </a>
                                            <ul class="submenu">
                                                {{-- <li><a href="{{route('employeelist.create')}}">Add Employee </a></li> --}}
                                                <li><a href="{{route('employeelist.index')}}">All Employee List</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                               
             @else
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Event Category</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('category.index')}}">All  Event</a></li>
                        <li><a href="{{route('category.create')}}">New Event Add</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Event Product</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('product.index')}}">All Event Product</a></li>
                        <li><a href="{{route('product.create')}}">New Event Product</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Equipment Company</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('company.index')}}">All Equipment Company</a></li>
                        <li><a href="{{route('company.create')}}">Equipment Company Add</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Employee List</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('employeelist.create')}}">Add Employee </a></li>
                            <li><a href="{{route('employeelist.index')}}">All Employee List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Schedule</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('schedule.create')}}">New Schedule Add</a></li>
                            <li><a href="{{route('schedule.index')}}">All Event Schedule</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Event Venu Detail</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('eventvenues.create')}}">New Event Venu Add</a></li>
                            <li><a href="{{route('eventvenues.index')}}">All Event Venu</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Blog Post</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('blogpost.create')}}">Add Blog Post</a></li>
                            <li><a href="{{route('blogpost.index')}}">All Blog List</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Sponsor Company</span>
                            </a>
                            <ul class="submenu">
                            <li><a href="{{route('sponsor.create')}}">Add Sponsor Detail</a></li>
                            <li><a href="{{route('sponsor.index')}}">All Sponsor List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Event Speaker</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('eventspeaker.create')}}">Add Speaker</a></li>
                            <li><a href="{{route('eventspeaker.index')}}">All Event Speaker</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Event Booking</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('booking.index')}}">All Booking</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Event Speaker</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('eventspeaker.create')}}">Add Speaker</a></li>
                            <li><a href="{{route('eventspeaker.index')}}">All Event Speaker</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">Event Review</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('userreview.index')}}">All Review</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-copy"></span><span class="mtext">User Contact</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('contact.index')}}">All Contact</a></li>
                           </ul>
                    </li>
                    </ul>   
            @endif
            
            
        </div>
    </div>
   
</div>