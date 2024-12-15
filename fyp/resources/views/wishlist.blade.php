<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('partials.head')
</head>
<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        @include('partials.header')
        <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        @include('partials.sidebar')
        <!-- Page Banner Start -->
        <section class="page-banner text-white py-165 rpy-130" style="background-image: url({{ asset('assets/images/banner/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Wishlist Page</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Wishlist Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Wishlist Area Start -->
        <div class="wishlist-area py-130 rpy-100">
            <div class="container">
                <div class="cart-item-wrap wow fadeInUp delay-0-2s">
                    <div class="cart-single-item">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <div class="cart-img">
                            <img src="{{ asset('assets/images/widgets/product2.png') }}" alt="Product Image">
                        </div>
                        <h5 class="product-name">Orange Fruits</h5>
                        <span class="product-price">250</span>
                        <strong class="stock">In Stock</strong>
                        <a href="{{ url('/cart') }}" class="theme-btn style-two">Add to Cart</a>
                    </div>
                    <div class="cart-single-item">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <div class="cart-img">
                            <img src="{{ asset('assets/images/widgets/product3.png') }}" alt="Product Image">
                        </div>
                        <h5 class="product-name">Fresh Broccoli</h5>
                        <span class="product-price">250</span>
                        <strong class="stock">In Stock</strong>
                        <a href="{{ url('/cart') }}" class="theme-btn style-two">Add to Cart</a>
                    </div>
                    <div class="cart-single-item">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <div class="cart-img">
                            <img src="{{ asset('assets/images/widgets/product4.png') }}" alt="Product Image">
                        </div>
                        <h5 class="product-name">Bread Grains</h5>
                        <span class="product-price">250</span>
                        <strong class="stock">In Stock</strong>
                        <a href="{{ url('/cart') }}" class="theme-btn style-two">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Area End -->


        <!-- Client Logo Section Start -->
        <div class="client-logo-section text-center bg-light-green py-60">
            <div class="container">
                <div class="client-logo-wrap">
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo1.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo2.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo3.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo4.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo5.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo6.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo1.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo2.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo3.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo4.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo5.png') }}" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item">
                        <a href="{{ url('/contact') }}"><img src="{{ asset('assets/images/client-logo/client-logo6.png') }}" alt="Client Logo"></a>
                    </div>
                </div>
            </div>
            <div class="client-logo-shapes">
                <img class="shape-one" src="{{ asset('assets/images/shapes/cl-shape1.png') }}" alt="Shape">
                <img class="shape-two" src="{{ asset('assets/images/shapes/cl-shape2.png') }}" alt="Shape">
                <img class="shape-three" src="{{ asset('assets/images/shapes/cl-shape3.png') }}" alt="Shape">
                <img class="shape-four" src="{{ asset('assets/images/shapes/cl-shape4.png') }}" alt="Shape">
                <img class="shape-five" src="{{ asset('assets/images/shapes/cl-shape5.png') }}" alt="Shape">
                <img class="shape-six" src="{{ asset('assets/images/shapes/cl-shape6.png') }}" alt="Shape">
            </div>
        </div>
        <!-- Client Logo Section End -->

        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
