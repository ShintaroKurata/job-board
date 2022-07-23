    <!--Header section start-->
    <header class="header-absolute sb-border header-sticky d-none d-lg-block">
        <div class="main-header">
            <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
                <div class="row align-items-center g-0">

                    <!--Logo start-->
                    <div class="col-xl-2 col-lg-2 col-12">
                        <div class="logo">
                            <a href="/"><img src="{{asset('external/images/fashionate_logo.png')}}" style="width: 80%;" alt="logo"></a>
                        </div>
                    </div>
                    <!--Logo end-->

                    <!--Menu start-->
                    <div class="col-xl-5 col-lg-5 col-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="/">Home </a>
                                </li>
                                <li><a href="{{route('items.welcome')}}">Items</a>
                                </li>
                                <li><a href="{{route('brand.allbrands')}}">Brands</a></li>
                                <li><a href="blog.html">Blog <small class="icon-arrow"></small></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details.html">Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages <small class="icon-arrow"></small></a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="faq.html">FAQS</a></li>
                                        <li><a href="pricing.html">Pricing & Plan</a></li>
                                        <li><a href="login-register.html">Login & Register</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                        <li><a href="shop.html">Shop <small class="icon-arrow"></small></a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--Menu end-->

                    <!-- Cart & Search Area Start -->
                    <div class="col-xl-5 col-lg-5 col-12">
                        <div class="header-btn-action d-flex justify-content-end">
                            <div class="btn-action-wrap d-flex">
                                <div class="jp-author item">
                                    <a href="{{route('buyer.login_register')}}">
                                        <i class="lnr lnr-user"></i>
                                        <span>Buyer Login</span>
                                    </a>
                                </div>
                                <div class="jp-author item">
                                    <a href="{{route('brand_owner.login_register')}}">
                                        <i class="lnr lnr-user"></i>
                                        <span>Brand Owner Login</span>
                                    </a>
                                </div>
                                <div class="jp-author-action item">
                                    <a href="#quick-view-modal-container" data-toggle="modal"> <span>Brand</span> <span class="fw-400">Post an item</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart & Search Area End -->
                </div>

            </div>
        </div>
    </header>
    <!--Header section end-->
        <!--Header Mobile section start-->
        <header class="header-mobile bg_color--2 d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-3 col-md-3">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-start">
                                                    <li class="popup-mobile-click">
                                                        <a href="javascript:void(0)"><i class="lnr lnr-menu"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo text-center">
                                            <a href="index.html">
                                                <img src="assets/images/logo-mobile.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="#" class="header-search-toggle"><i class="lnr lnr-magnifier"></i></a>
                                                        </div>
                                                        <div class="header-search-form">
                                                            <form action="#">
                                                                <input type="text" placeholder="Type and hit enter">
                                                                <button><i class="lnr lnr-magnifier"></i></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo-mobile.png" alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li class="has-mega-menu"><a href="#"><span>Home</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="index.html"><span>Home V1</span></a></li>
                                <li><a href="index-2.html"><span>Home V2</span></a></li>
                                <li><a href="index-3.html"><span>Home V3</span></a></li>
                                <li><a href="index-4.html"><span>Home V4</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Jobs</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="job-listing.html"><span>Jobs Listing</span></a></li>
                                <li><a href="job-with-map.html"><span>Jobs With Map</span></a></li>
                                <li><a href="job-details.html"><span>Job Detail V1</span></a></li>
                                <li><a href="job-details-two.html"><span>Job Detail V2</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Candidates</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="candidates-listing.html"><span>Candidates Listing</span></a></li>
                                <li><a href="candidate-details.html"><span>Candidate Details V1</span></a></li>
                                <li><a href="candidate-details-two.html"><span>Candidate Details V2</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Employers</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="employer-listing.html"><span>Employers Listing</span></a></li>
                                <li><a href="employer-details.html"><span>Employer Detail V1</span></a></li>
                                <li><a href="employer-details-two.html"><span>Employer Detail V2</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Blog</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="blog.html"><span>Blog</span></a></li>
                                <li><a href="blog-details.html"><span>Blog Details</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>

                        <li class="has-mega-menu"><a href="#"><span>Pages</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                                <li><a href="about.html"><span>About Us</span></a></li>
                                <li><a href="contact.html"><span>Contact Us</span></a></li>
                                <li><a href="faq.html"><span>FAQS</span></a></li>
                                <li><a href="pricing.html"><span>Pricing & Plan</span></a></li>
                                <li><a href="login-register.html"><span>Login / Register</span></a></li>
                                <li><a href="dashboard.html"><span>Dashboard</span></a></li>
                                <li><a href="shop.html"><span>Shop</span></a></li>
                                <li><a href="product-details.html"><span>Product Details</span></a></li>
                                <li><a href="cart.html"><span>Cart</span></a></li>
                                <li><a href="checkout.html"><span>Checkout</span></a></li>
                                <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                                <li><a href="404.html"><span>404 Error</span></a></li>
                            </ul>
                            <!-- End Dropdown Menu -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->

        <!-- Bottom Navbar Mobile Start -->
        <div class="bottom-navbar-mobile section d-block d-lg-none">
            <nav>
                <ul class="list-actions">
                    <li>
                        <a class="toggle-btn active" href="index.html">
                            <span><i class="lnr lnr-home"></i></span>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="toggle-btn toggle-btn-js" data-target="#job-list-mobile-id" href="#">
                            <span><i class="lnr lnr-list"></i></span>
                            <span class="text">Jobs list</span>
                        </a>
                    </li>
                    <li>
                        <a href="login-register.html">
                            <span><i class="lnr lnr-heart"></i></span>
                            <span class="text">Save</span>
                        </a>
                    </li>
                    <li>
                        <a class="toggle-btn-two toggle-btn-js" data-target="#notifications-mobile-id" href="#">
                            <span><i class="lnr lnr-alarm"></i></span>
                            <span class="text">Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="login-register.html">
                            <span><i class="lnr lnr-user"></i></span>
                            <span class="text">Account</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Bottom Navbar Mobile End -->

        <!-- Bottom Navbar Mobile Popup Start -->
        <div class="mobile-popup">
            <div class="job-list-mobile" id="job-list-mobile-id">
                <div class="heading">
                    <div class="title">
                        <i class="lnr lnr-list"></i>
                        <h3>All Jobs list</h3>
                    </div>
                    <a class="view-all" href="#">See all jobs</a>
                </div>
                <div class="content-popup-scroll">
                    <ul class="list-item">
                        <li><a href="job-listing.html"><i class="lnr lnr-printer"></i>Accounting </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-film-play"></i>Broadcasting </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-phone"></i>Customer Service </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-bullhorn"></i>Digital Marketing </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-chart-bars"></i>Finance & Accounting </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-smartphone"></i>Game Mobile </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-picture"></i>Graphics & Design </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-home"></i>Graphics & Design </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-database"></i>Medical Doctor </a></li>
                        <li><a href="job-listing.html"><i class="lnr lnr-dinner"></i>Restaurant </a></li>
                    </ul>
                </div>
            </div>
            <div class="notifications-mobile" id="notifications-mobile-id">
                <div class="heading">
                    <div class="title">
                        <i class="lnr lnr-list"></i>
                        <h3>All Notifications</h3>
                    </div>
                    <a class="view-all" href="#">See all jobs</a>
                </div>
                <div class="content-popup-scroll">
                    <ul class="list-item">
                        <li><a href="login-register.html"><i class="lnr lnr-book"></i><span><b class="highlight">Register now</b> to reach dream jobs easier.</span> </a></li>
                        <li><a href="job-with-map.html"><i class="lnr lnr-book"></i><span><b class="highlight">Job suggestion</b> you might be interested based on your profile.</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bottom Navbar Mobile Popup End -->
