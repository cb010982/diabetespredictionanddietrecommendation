<!-- main header -->
<header class="main-header">

    <div class="header-top-wrap bg-light-green text-white py-10">
        <div class="container-fluid">
            <div class="header-top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="top-left">
                            <ul>
                                <li><i class="far fa-envelope"></i> <b>Email Us :</b> <a
                                        href="mailto:support@gmail.com">support@gmail.com</a></li>
                                <li><i class="far fa-clock"></i> <b>Working Hours :</b> Monday - Friday, 08 am - 05
                                    pm
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="top-right text-lg-right">
                            <ul>
                                <li><i class="far fa-phone"></i> <b>Call :</b> <a href="callto:+012(345)67899">+012
                                        (345) 678 99</a></li>
                                <li>
                                    <div class="social-style-one">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container-fluid clearfix">

            <div class="header-inner d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo"></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo my-15">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home One</a></li>
                                        <li><a href="{{ url('/index2') }}">Home Two</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">pages</a>
                                    <ul>
                                        <li><a href="{{ url('/about') }}">About us</a></li>
                                        <li class="dropdown"><a href="#">services</a>
                                            <ul>
                                                <li><a href="{{ url('/services') }}">all services</a></li>
                                                <li><a href="{{ url('/service-details') }}">service details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/faqs') }}">faqs</a></li>
                                        <li><a href="{{ url('/farmers') }}">Farmers</a></li>
                                        <li><a href="{{ url('/404') }}">404 error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">portfolio</a>
                                    <ul>
                                        <li><a href="{{ url('/portfolio-grid') }}">Portfolio grid</a></li>
                                        <li><a href="{{ url('/portfolio-fluid') }}">Portfolio Fluid</a></li>
                                        <li><a href="{{ url('/portfolio-details') }}">Portfolio details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">blog</a>
                                    <ul>
                                        <li><a href="{{ url('/blog-grid') }}">blog Grid</a></li>
                                        <li><a href="{{ url('/blog-standard') }}">blog Standard</a></li>
                                        <li><a href="{{ url('/blog-details') }}">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">shop</a>
                                    <ul>
                                        <li><a href="{{ url('/shop-grid') }}">shop Grid</a></li>
                                        <li><a href="{{ url('/shop-left-sidebar') }}">shop left sidebar</a></li>
                                        <li><a href="{{ url('/shop-right-sidebar') }}">shop right sidebar</a></li>
                                        <li><a href="{{ url('/product-details') }}">Product details</a></li>
                                        <li><a href="{{ url('/cart') }}">cart page</a></li>
                                        <li><a href="{{ url('/checkout') }}">checkout</a></li>
                                        <li><a href="{{ url('/wishlist') }}">wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-icons">
                    <!-- Nav Search -->
                    <div class="nav-search py-15">
                        <button class="far fa-search"></button>
                        <form action="#" class="hide">
                            <input type="text" placeholder="Search" class="searchbox" required="">
                            <button type="submit" class="searchbutton far fa-search"></button>
                        </form>
                    </div>

                    <button class="cart">
                        <i class="far fa-shopping-basket"></i>
                        <span>5</span>
                    </button>

                    <button class="user">
                        <i class="far fa-user-circle"></i>
                    </button>

                    <a href="{{ url('/contact') }}" class="theme-btn">Consultations <i class="fas fa-angle-double-right"></i></a>

                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <i class="far fa-ellipsis-h"></i>
                            <i class="far fa-ellipsis-h"></i>
                            <i class="far fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!-- main header -->

