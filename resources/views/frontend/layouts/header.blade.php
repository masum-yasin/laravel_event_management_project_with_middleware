<div id="preloader">
    <div id="status"></div>
</div>
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

                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('eventschedule')}}">Event Schedule</a></li>
                                    <li><a href="{{route('eventdetail')}}">Event Detail</a></li>
                                    <li><a href="speakers.html">Speaker Lists</a></li>
                                    <li><a href="speaker-detail.html">Speaker Detail</a></li>
                                    <li><a href="sponsors.html">Sponsors</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="comingsoon.html">Coming Soon</a></li>
                                    <li><a href="search-result.html">Search Result</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul> 
                            </li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('productlist')}}">Product Lists</a></li>
                                    <li><a href="{{route('productdetail')}}">Product Detail</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="myaccount.html">My Account</a></li>
                                </ul>
                            </li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('allpost')}}">All Posts</a></li>
                                    <li><a href="{{route('singlepost')}}">Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact.us')}}" class="">Contact Us</a></li>
                            <li class="search-main">
                                <a href="#search1" class="mt_search"><i class="fa fa-search fs-5"></i></a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->  
                   <div class="register-login">
                        <a href="" class="nir-btn white">Booking Now<i class="fa fa-angle-right "></i></a>
                    </div> 
                   

                    <div id="slicknav-mobile"></div>
                    <div>
                        <a href="{{route('dashboard')}}" class="btn btn-warning p-3" style="width: 100px;">Admin</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>