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
        <!-- Hidden Sidebar -->
        @include('partials.sidebar')
        <!-- Slider Section Start -->
        <section class="slider-section bg-lighter">
            <div class="main-slider-active">
                <div class="slider-single-item slide-one">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <div class="sub-title mb-20">Welcome to Munfirm</div>
                                    <h1>Organic Foods & Vegetables</h1>
                                    <h6>25 Years of experience in agriculture farming</h6>
                                    <div class="slider-btns mt-30">
                                        <a href="{{ url('/shop-grid') }}" class="theme-btn">Shop Now <i class="fas fa-angle-double-right"></i></a>
                                        <a href="{{ url('/about') }}" class="theme-btn style-two">Learn More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider-images">
                                    <img class="image" src="{{ asset('assets/images/slider/slider-image1.png') }}" alt="Slider">
                                    <img class="offer" src="{{ asset('assets/images/shapes/organic.png') }}" alt="Organic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-shapes">
                        <img class="pumpkin-shape" src="{{ asset('assets/images/slider/pumpkin.png') }}" alt="Pumpkin">
                        <img class="two-leaf" src="{{ asset('assets/images/slider/two-lear.png') }}" alt="Leaf">
                        <img class="half-leaf" src="{{ asset('assets/images/slider/half-leaf.png') }}" alt="Leaf">
                        <img class="leaf-one" src="{{ asset('assets/images/slider/leaf-1.png') }}" alt="Leaf">
                        <img class="leaf-two" src="{{ asset('assets/images/slider/leaf-2.png') }}" alt="Leaf">
                    </div>
                </div>
                <div class="slider-single-item slide-two">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-images">
                                    <img class="image" src="{{ asset('assets/images/slider/slider-image2.png') }}" alt="Slider">
                                    <img class="offer" src="{{ asset('assets/images/shapes/organic.png') }}" alt="Organic">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <div class="sub-title mb-20">Welcome to Munfirm</div>
                                    <h1>Organic Foods & Vegetables</h1>
                                    <h6>25 Years of experience in agriculture farming</h6>
                                    <div class="slider-btns mt-30">
                                        <a href="{{ url('/shop-grid') }}" class="theme-btn">Shop Now <i class="fas fa-angle-double-right"></i></a>
                                        <a href="{{ url('/about') }}" class="theme-btn style-two">Learn More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-shapes">
                        <img class="pumpkin-shape" src="{{ asset('assets/images/slider/pumpkin.png') }}" alt="Pumpkin">
                        <img class="two-leaf" src="{{ asset('assets/images/slider/two-lear.png') }}" alt="Leaf">
                        <img class="half-leaf" src="{{ asset('assets/images/slider/half-leaf.png') }}" alt="Leaf">
                        <img class="leaf-one" src="{{ asset('assets/images/slider/leaf-1.png') }}" alt="Leaf">
                        <img class="leaf-two" src="{{ asset('assets/images/slider/leaf-2.png') }}" alt="Leaf">
                    </div>
                </div>
            </div>
            <img class="bg-leaf" src="{{ asset('assets/images/slider/slider-bg-leaf.png') }}" alt="Shape">
            <img class="bg-shape" src="{{ asset('assets/images/slider/slider-bg-shape.png') }}" alt="Shape">
        </section>
        <!-- Slider Section End -->


        <!-- Category Section Start -->
        <section class="category-section pt-130 rpt-100">
            <div class="container">
                <div class="row align-items-end pb-35">
                    <div class="col-lg-7 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-20">
                            <span class="sub-title mb-20">Popular Foods and Vegetables</span>
                            <h2>Quality Fruits & Vegetables</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp delay-0-4s">
                        <div class="text mb-20">
                            <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded by desire</p>
                        </div>
                    </div>
                </div>
                <div class="category-wrap">
                    <div class="category-item wow fadeInUp delay-0-3s">
                        <div class="icon">
                            <img src="{{ asset('assets/images/category/icon1.png') }}" alt="Icon">
                        </div>
                        <h5><a href="{{ url('/services') }}">Organic Fruits</a></h5>
                        <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Arrow">
                    </div>
                    <div class="category-item wow fadeInUp delay-0-4s">
                        <div class="icon">
                            <img src="{{ asset('assets/images/category/icon2.png') }}" alt="Icon">
                        </div>
                        <h5><a href="{{ url('/services') }}">Vegetables</a></h5>
                        <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Arrow">
                    </div>
                    <div class="category-item wow fadeInUp delay-0-5s">
                        <div class="icon">
                            <img src="{{ asset('assets/images/category/icon3.png') }}" alt="Icon">
                        </div>
                        <h5><a href="{{ url('/services') }}">Sea Fish’s</a></h5>
                        <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Arrow">
                    </div>
                    <div class="category-item wow fadeInUp delay-0-6s">
                        <div class="icon">
                            <img src="{{ asset('assets/images/category/icon4.png') }}" alt="Icon">
                        </div>
                        <h5><a href="{{ url('/services') }}">Crisp Bakery</a></h5>
                        <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Arrow">
                    </div>
                    <div class="category-item wow fadeInUp delay-0-7s">
                        <div class="icon">
                            <img src="{{ asset('assets/images/category/icon5.png') }}" alt="Icon">
                        </div>
                        <h5><a href="{{ url('/services') }}">Chicken Egg</a></h5>
                        <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Arrow">
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Section End -->


        <!-- About Section Start -->
        <section class="about-section pt-85 rpt-55 pb-130 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-images wow fadeInLeft delay-0-2s">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/about/about1.jpg') }}" alt="About">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('assets/images/about/about2.jpg') }}" alt="About">
                                    <img src="{{ asset('assets/images/about/about3.jpg') }}" alt="About">
                                </div>
                            </div>
                            <div class="offer">
                                <img src="{{ asset('assets/images/shapes/organic.png') }}" alt="Offer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content rpt-65 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-20">About Company</span>
                                <h2>Organic & Healthy Foods Provider Farming</h2>
                            </div>
                            <ul class="nav justify-content-between">
                                <li>
                                    <a class="nav-link active" data-toggle="tab" href="#agriculture">
                                        <i class="flaticon-spa"></i>
                                        <h4>Agriculture<br>& Foods</h4>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#vegetables">
                                        <i class="flaticon-spa"></i>
                                        <h4>Vegetables<br>& Fruits</h4>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content pt-25">
                                <div class="tab-pane fade show active" id="agriculture">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms of pleasure of the moment so blinded by desire, that they cannot foresee the pain</p>
                                    <div class="author-wrap">
                                        <img src="{{ asset('assets/images/about/author.jpg') }}" alt="Author">
                                        <div class="title">
                                            <h4>Michael D. Foreman</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                        <img src="{{ asset('assets/images/about/signature.png') }}" alt="Signature">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vegetables">
                                    <p>Charms of pleasure of the moment so blinded by desire, that they cannot foresee the pain On the other hand we denounce with righteous indignation and dislike men who are beguiled and demoralized by the</p>
                                    <div class="author-wrap">
                                        <img src="{{ asset('assets/images/about/author.jpg') }}" alt="Author">
                                        <div class="title">
                                            <h4>Russell J. Knoll</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                        <img src="{{ asset('assets/images/about/signature.png') }}" alt="Signature">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->


        <!-- Offer Banners Start -->
        <section class="offer-banners-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="offer-banner-item color-two wow fadeInUp delay-0-2s">
                            <div class="content">
                                <span class="sub-title">35% Off Foods</span>
                                <h4>Organic Vegetables</h4>
                                <p>Best Foods For Your Family</p>
                                <a href="{{ url('/shop-grid') }}" class="theme-btn style-two">Shop Now <i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/offers/offer-banner1.png') }}" alt="Offer Banner">
                            </div>
                            <img class="offer-bg" src="{{ asset('assets/images/offers/offer-baner-bg1.png') }}" alt="Offer BG">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="offer-banner-item wow fadeInUp delay-0-4s">
                            <div class="content">
                                <span class="sub-title">35% Off Foods</span>
                                <h4>Fresh Organic Fruits</h4>
                                <p>Best Foods For Your Family</p>
                                <a href="{{ url('/shop-grid') }}" class="theme-btn">Shop Now <i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/offers/offer-banner2.png') }}" alt="Offer Banner">
                            </div>
                            <img class="offer-bg" src="{{ asset('assets/images/offers/offer-baner-bg2.png') }}" alt="Offer BG">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="offer-banner-item color-three wow fadeInUp delay-0-6s">
                            <div class="content">
                                <span class="sub-title">35% Off Foods</span>
                                <h4>Ripe Strawberries</h4>
                                <p>Best Foods For Your Family</p>
                                <a href="{{ url('/shop-grid') }}" class="theme-btn">Shop Now <i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/offers/offer-banner3.png') }}" alt="Offer Banner">
                            </div>
                            <img class="offer-bg" src="{{ asset('assets/images/offers/offer-baner-bg3.png') }}" alt="Offer BG">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer Banners End -->


        <!-- Product Section Start -->
        <section class="product-section pt-100 rpt-70 pb-130 rpb-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <span class="sub-title mb-20">Popular Foods and Vegetables</span>
                    <h2>Quality Fruits & Vegetables</h2>
                </div>
                <div class="product-active">
                    <div class="product-item wow fadeInUp delay-0-2s">
                        <span class="offer">53 Off</span>
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product1.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Organic Brocolli</a></h5>
                            <span class="price">
                        <del>25</del>
                        <span>18</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-3s">
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product2.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Fresh Carrots</a></h5>
                            <span class="price">
                        <span>49.58</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-4s">
                        <span class="offer bg-red">sale</span>
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product3.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Organic Brocolli</a></h5>
                            <span class="price">
                        <del>25</del>
                        <span>18</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-5s">
                        <span class="offer">20 Off</span>
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product4.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Chiken Egg</a></h5>
                            <span class="price">
                        <del>55</del>
                        <span>36</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product5.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Fresh Gooseberry</a></h5>
                            <span class="price">
                        <span>205</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-7s">
                        <span class="offer">53 Off</span>
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product6.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Fresh Croissants</a></h5>
                            <span class="price">
                        <del>25</del>
                        <span>18</span>
                    </span>
                        </div>
                    </div>
                    <div class="product-item wow fadeInUp delay-0-8s">
                        <span class="offer">25 Off</span>
                        <div class="image">
                            <img src="{{ asset('assets/images/products/product7.png') }}" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5><a href="{{ url('/product-details') }}">Chiken Egg’s</a></h5>
                            <span class="price">
                        <del>25</del>
                        <span>18</span>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->


        <!-- Video Area Start -->
        <div class="video-area">
            <div class="container">
                <div class="video-inner wow fadeInUp delay-0-2s" style="background-image: url({{ asset('assets/images/video/video-bg.jpg') }});">
                    <i class="flaticon-leaf-1"></i>
                    <span class="video-text">Watch Videos</span>
                    <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <!-- Video Area End -->


        <!-- Special Offer Start -->
        <section class="special-offer bg-lighter pt-250 pb-80">
            <div class="special-offer-content text-center py-130 rpy-100 wow fadeInUp delay-0-2s">
                <div class="section-title mb-30">
                    <span class="sub-title mb-20">35% Off for Fruits</span>
                    <h2>Special Deal Of  This Week</h2>
                </div>
                <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms</p>
                <ul class="count-down mt-35" data-date="Jul 31, 2022 00:00:00">
                    <li><span id="days">09</span>days</li>
                    <li><span id="hours">45</span>Hours</li>
                    <li><span id="minutes">36</span>Minutes</li>
                    <li><span id="seconds">28</span>Seconds</li>
                </ul>
                <div class="count-down-btns mt-10">
                    <a href="{{ url('/shop-grid') }}" class="theme-btn">Shop Now <i class="fas fa-angle-double-right"></i></a>
                    <a href="{{ url('/about') }}" class="theme-btn style-two">use code <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <img class="offer-bg" src="{{ asset('assets/images/offers/special-offer-bg.png') }}" alt="Offer BG">
            <img class="munakoiso" src="{{ asset('assets/images/shapes/munakoiso.png') }}" alt="Munakoiso">
            <img class="litchi" src="{{ asset('assets/images/shapes/litchi.png') }}" alt="Litchi">
            <img class="special-offer-left" src="{{ asset('assets/images/offers/offer-left.png') }}" alt="Offer">
            <img class="special-offer-right" src="{{ asset('assets/images/offers/offer-right.png') }}" alt="Offer">
        </section>
        <!-- Special Offer End -->


        <!-- Call To Action Area Start -->
        <section class="cta-area">
            <div class="container">
                <div class="cta-inner overlay text-white wow fadeInUp delay-0-2s" style="background-image: url({{ asset('assets/images/background/cta-bg.jpg') }});">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="section-title mt-20 mb-15">
                                <span class="sub-title mb-15">Need Any Supports</span>
                                <h3>Get Our Quality Foods</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="{{ url('/contact') }}" class="theme-btn btn-white my-15">Get In Touch <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End -->


        <!-- Gallery Area Start -->
        <section class="gallery-area pt-130 rpt-100">
            <div class="container">
                <div class="gallery-header mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-15">Photo Gallery</span>
                                <h2>Insite Photo Gallery</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <div class="slider-arrows mb-25">
                                <button class="gallery-prev"><i class="fas fa-arrow-left"></i></button>
                                <button class="gallery-next"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="gallery-active">
                    <div class="gallery-item wow fadeInUp delay-0-2s">
                        <img src="{{ asset('assets/images/gellery/gallery1.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4>Organic Fruits</h4>
                                <p>Fresh Food</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item big-item wow fadeInUp delay-0-4s">
                        <img src="{{ asset('assets/images/gellery/gallery2.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4>Organic Fruits Juice</h4>
                                <p>Fresh Food & Vegetable</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item wow fadeInUp delay-0-6s">
                        <img src="{{ asset('assets/images/gellery/gallery3.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4>Organic Fruits</h4>
                                <p>Vegetable</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item wow fadeInUp delay-0-8s">
                        <img src="{{ asset('assets/images/gellery/gallery4.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4>Organic Fruits</h4>
                                <p>Fresh Food</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area End -->


        <!-- Feedback Section Start -->
        <section class="feedback-section pt-50 rpt-20">
            <div class="container">
                <div class="row large-gap">
                    <div class="col-lg-6">
                        <div class="feedback-content-area rmb-65 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-50">
                                <span class="sub-title mb-20">Customer Reviews</span>
                                <h2>Valuable Customer’s Feedback (Reviews)</h2>
                            </div>
                            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="slider__label sr-only"></span>
                            </div>
                            <div class="feedback-active mt-20">
                                <div class="feedback-item">
                                    <p>Sit amet consectetur adipiscing elit eiusmod tempor incididunt labore et dolore magna aliqua euis ipsum suspendisse ultrices gravid aisuscom viverra maecenas accumsan facilisis</p>
                                    <div class="feedback-author">
                                        <img src="{{ asset('assets/images/reviews/fb-author1.png') }}" alt="Author">
                                        <div class="title">
                                            <h4>Michael D. Foreman</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-item">
                                    <p>Suspendisse ultrices gravid aisuscom viverra maecenas accumsan facilisis Sit amet elitt adipiscing eiusmod tempor incididunt labore et dolore magna aliqua euis ipsum</p>
                                    <div class="feedback-author">
                                        <img src="{{ asset('assets/images/reviews/fb-author1.png') }}" alt="Author">
                                        <div class="title">
                                            <h4>Robert Hasib</h4>
                                            <span>Co-Founder</span>
                                        </div>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-item">
                                    <p>Sit amet consectetur adipiscing elit eiusmod tempor incididunt labore et dolore magna aliqua euis ipsum suspendisse ultrices gravid aisuscom viverra maecenas accumsan facilisis</p>
                                    <div class="feedback-author">
                                        <img src="{{ asset('assets/images/reviews/fb-author1.png') }}" alt="Author">
                                        <div class="title">
                                            <h4>Michael D. Foreman</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feedback-images wow fadeInRight delay-0-2s">
                            <img class="first-image" src="{{ asset('assets/images/reviews/feedback-right.jpg') }}" alt="Feedback">
                            <img class="last-image" src="{{ asset('assets/images/reviews/feedback-right.png') }}" alt="Feedback">
                            <img class="bg-image" src="{{ asset('assets/images/shapes/feedback-bg.png') }}" alt="Feedback">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feedback Section End -->


        <!-- News Section Start -->
        <section class="news-section pt-130 rpt-100 pb-70 rpb-40">
            <div class="container">
                <div class="section-title text-center mb-60">
                    <span class="sub-title mb-20">Read Article Tips</span>
                    <h2>Latest News & Blog</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('assets/images/news/news1.jpg') }}" alt="News">
                                <span class="date"><b>25</b> July</span>
                            </div>
                            <div class="content">
                                <span class="sub-title">Vegetable</span>
                                <h4><a href="{{ url('/blog-details') }}">Unicode UTF8 Character Sets They Sltimate Guide Systems</a></h4>
                                <a href="{{ url('/blog-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ asset('assets/images/news/news2.jpg') }}" alt="News">
                                <span class="date"><b>25</b> July</span>
                            </div>
                            <div class="content">
                                <span class="sub-title">Farming</span>
                                <h4><a href="{{ url('/blog-details') }}">Quality Foods Requirments For Every Human Body’s</a></h4>
                                <a href="{{ url('/blog-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="news-item wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ asset('assets/images/news/news3.jpg') }}" alt="News">
                                <span class="date"><b>25</b> July</span>
                            </div>
                            <div class="content">
                                <span class="sub-title">Organic Fruits</span>
                                <h4><a href="{{ url('/blog-details') }}">Choose Awesome Vegetables For Your Daily Life Routine</a></h4>
                                <a href="{{ url('/blog-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-shapes">
                <img class="onion" src="{{ asset('assets/images/shapes/onion.png') }}" alt="Onion">
                <img class="two-leaf" src="{{ asset('assets/images/slider/two-lear.png') }}" alt="Leaf">
                <img class="half-leaf" src="{{ asset('assets/images/slider/half-leaf.png') }}" alt="Leaf">
                <img class="leaf-two" src="{{ asset('assets/images/shapes/leaf-three.png') }}" alt="Leaf">
                <img class="leaf-three" src="{{ asset('assets/images/shapes/leaf-four.png') }}" alt="Leaf">
            </div>
        </section>
        <!-- News Section End -->


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
