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
                    <h1 class="page-title wow fadeInUp delay-0-2s">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- About Section Start -->
        <section class="about-page-section rel z-1 py-130 rpy-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-three-content rmb-35 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-20">
                                <span class="sub-title mb-20">About Company</span>
                                <h2>Organic & Helathy Foods Provider Farming</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim voluptatem</p>
                            <div class="row mt-30">
                                <div class="col-md-6">
                                    <div class="about-feature-two">
                                        <div class="icon"><i class="flaticon-wheat-sack"></i></div>
                                        <h4><a href="{{ url('/service-details') }}">Agriculture & Foods</a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-feature-two">
                                        <div class="icon"><i class="flaticon-fruits"></i></div>
                                        <h4><a href="{{ url('/service-details') }}">Vegetables & Fruits</a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-feature-two">
                                        <div class="icon"><i class="flaticon-eggs-1"></i></div>
                                        <h4><a href="{{ url('/service-details') }}">Farming products</a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-feature-two">
                                        <div class="icon"><i class="flaticon-social-care"></i></div>
                                        <h4><a href="{{ url('/service-details') }}">Crisp Bread & Cake’s</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="about-video wow fadeInRight delay-0-2s">
                            <img class="image" src="{{ asset('assets/images/about/about-page.jpg') }}" alt="About">
                            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                            <img class="bg-shape" src="{{ asset('assets/images/about/about-bg-shape.png') }}" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/images/shapes/about-page.png') }}" alt="Shape" class="shape">
        </section>
        <!-- About Section End -->


        <!-- Features Section Start -->
        <section class="feature-section pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="content">
                                <span class="number">01</span>
                                <div class="image">
                                    <img src="{{ asset('assets/images/features/feature1.png') }}" alt="Feature">
                                </div>
                                <h4>Organic Vegetables</h4>
                                <p>Quis autem vel eum reprehenderit quiea voluptate velit esse quam niyate smolestiae consequatur nulla</p>
                            </div>
                            <a href="{{ url('/service-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item color-two wow fadeInUp delay-0-4s">
                            <div class="content">
                                <span class="number">02</span>
                                <div class="image">
                                    <img src="{{ asset('assets/images/features/feature2.png') }}" alt="Feature">
                                </div>
                                <h4>Organic Fruits</h4>
                                <p>Quis autem vel eum reprehenderit quiea voluptate velit esse quam niyate smolestiae consequatur nulla</p>
                            </div>
                            <a href="{{ url('/service-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item color-three wow fadeInUp delay-0-6s">
                            <div class="content">
                                <span class="number">03</span>
                                <div class="image">
                                    <img src="{{ asset('assets/images/features/feature3.png') }}" alt="Feature">
                                </div>
                                <h4>Agriculture & Farming</h4>
                                <p>Quis autem vel eum reprehenderit quiea voluptate velit esse quam niyate smolestiae consequatur nulla</p>
                            </div>
                            <a href="{{ url('/service-details') }}" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->


        <!-- Gallery Area Start -->
        <section class="gallery-area">
            <div class="container-fluid">
                <div class="gallery-active">
                    <div class="gallery-item wow fadeInUp delay-0-2s">
                        <img src="{{ asset('assets/images/gellery/gallery1.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4><a href="{{ url('/portfolio-details') }}">Organic Fruits</a></h4>
                                <p>Fresh Food</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item big-item wow fadeInUp delay-0-4s">
                        <img src="{{ asset('assets/images/gellery/gallery2.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4><a href="{{ url('/portfolio-details') }}">Organic Fruits Juice</a></h4>
                                <p>Fresh Food & Vegetable</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item wow fadeInUp delay-0-6s">
                        <img src="{{ asset('assets/images/gellery/gallery3.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4><a href="{{ url('/portfolio-details') }}">Organic Fruits</a></h4>
                                <p>Vegetable</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="gallery-item wow fadeInUp delay-0-8s">
                        <img src="{{ asset('assets/images/gellery/gallery4.jpg') }}" alt="Gallery">
                        <div class="gallery-over">
                            <div class="content">
                                <h4><a href="{{ url('/portfolio-details') }}">Organic Fruits</a></h4>
                                <p>Fresh Food</p>
                            </div>
                            <a href="{{ url('/portfolio-details') }}" class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area End -->


        <!-- Team Area Start -->
        <section class="team-area pt-50 rpt-20 pb-95 rpb-65">
            <div class="container">
                <div class="team-header mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="section-title mb-25 text-lg-left text-center">
                                <span class="sub-title mb-15">Meet Our Team</span>
                                <h2>Experience Team</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-right text-center">
                            <div class="slider-arrows mb-25">
                                <button class="team-prev"><i class="fas fa-arrow-left"></i></button>
                                <button class="team-next"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="team-member wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member1.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Joseph C. Roberson</h4>
                        <span class="designation">Senior Farmer</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-3s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member2.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Timothy N. Allison</h4>
                        <span class="designation">Junior Manager</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member3.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Richard L. McDonald</h4>
                        <span class="designation">Business Consultant</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-5s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member4.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Gregory J. Vansant</h4>
                        <span class="designation">CO- Founder</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member1.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Joseph C. Roberson</h4>
                        <span class="designation">Senior Farmer</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-7s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member2.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Timothy N. Allison</h4>
                        <span class="designation">Junior Manager</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-8s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member3.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Richard L. McDonald</h4>
                        <span class="designation">Business Consultant</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                    <div class="team-member wow fadeInUp delay-0-9s">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/member4.jpg') }}" alt="Team Member">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <h4>Gregory J. Vansant</h4>
                        <span class="designation">CO- Founder</span>
                        <img class="team-bg" src="{{ asset('assets/images/team/team-member-bg.png') }}" alt="Bg">
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area End -->


        <!-- About Section Start -->
        <section class="about-section-two rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-two-image not-rounded wow fadeInUp delay-0-2s">
                            <img class="image" src="{{ asset('assets/images/about/about-page-left.jpg') }}" alt="About">
                            <img class="about-over" src="{{ asset('assets/images/about/about-left-over.png') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two-content pt-60 wow fadeInUp delay-0-4s">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-20">Why Choose Us</span>
                                <h2>Special Care For Our Every Food & Vegetable Lover</h2>
                            </div>
                            <div class="about-features mt-60">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="about-feature-item wow fadeInUp delay-0-5s">
                                            <span class="number">1</span>
                                            <div class="icon"><i class="flaticon-offer"></i></div>
                                            <h4><a href="{{ url('/service-details') }}">Discount Options</a></h4>
                                            <p>Sit amet consectetur adipis cing elit sed eiusmoe</p>
                                            <img src="{{ asset('assets/images/about/arrow.png') }}" alt="Arrow">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="about-feature-item wow fadeInUp delay-0-6s">
                                            <span class="number">2</span>
                                            <div class="icon"><i class="flaticon-return-box"></i></div>
                                            <h4><a href="{{ url('/service-details') }}">Best Return Policy</a></h4>
                                            <p>Sit amet consectetur adipis cing elit sed eiusmoe</p>
                                            <img src="{{ asset('assets/images/about/arrow.png') }}" alt="Arrow">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="about-feature-item wow fadeInUp delay-0-7s">
                                            <span class="number">3</span>
                                            <div class="icon"><i class="flaticon-24-hours"></i></div>
                                            <h4><a href="{{ url('/service-details') }}">Online Support</a></h4>
                                            <p>Sit amet consectetur adipis cing elit sed eiusmoe</p>
                                            <img src="{{ asset('assets/images/about/arrow.png') }}" alt="Arrow">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shapes">
                <img src="{{ asset('assets/images/shapes/about-shape1.png') }}" alt="Shape">
                <img src="{{ asset('assets/images/shapes/about-shape2.png') }}" alt="Shape">
            </div>
        </section>
        <!-- About Section End -->


        <!-- Feedback Section Start -->
        <section class="feedback-section pt-100 rpt-70 pb-130 rpb-100">
            <div class="container">
                <div class="section-title text-center mb-60">
                    <span class="sub-title mb-20">Customer Reviews</span>
                    <h2>Valuable Customer’s Feedback</h2>
                </div>
            </div>
            <div class="feedback-two-active mt-20">
                <div class="feedback-item style-two wow fadeInUp delay-0-2s">
                    <div class="content-image">
                        <p>Sit amet consectetur adipiscing eiusmod tempor incididunt labore dolore magna aliqae euisum suspendisse ultrices gravid aisuscom vivera accumsan facilisis</p>
                        <div class="image">
                            <img src="{{ asset('assets/images/reviews/feedback-author1.jpg') }}" alt="Authro">
                            <img class="bg" src="{{ asset('assets/images/reviews/feedback-author-bg.png') }}" alt="Background">
                        </div>
                    </div>
                    <div class="feedback-author">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <div class="title">
                            <h4>Michael D. Foreman</h4>
                            <span>CEO & Founder</span>
                        </div>
                        <div class="ratting">
                            <h6>Quality Foods</h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="feedback-item style-two wow fadeInUp delay-0-3s">
                    <div class="content-image">
                        <p>Sit amet consectetur adipiscing eiusmod tempor incididunt labore dolore magna aliqae euisum suspendisse ultrices gravid aisuscom vivera accumsan facilisis</p>
                        <div class="image">
                            <img src="{{ asset('assets/images/reviews/feedback-author2.jpg') }}" alt="Authro">
                            <img class="bg" src="{{ asset('assets/images/reviews/feedback-author-bg.png') }}" alt="Background">
                        </div>
                    </div>
                    <div class="feedback-author">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <div class="title">
                            <h4>Kenneth S. Slocum</h4>
                            <span>Business Manager</span>
                        </div>
                        <div class="ratting">
                            <h6>Quality Foods</h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="feedback-item style-two wow fadeInUp delay-0-4s">
                    <div class="content-image">
                        <p>Sit amet consectetur adipiscing eiusmod tempor incididunt labore dolore magna aliqae euisum suspendisse ultrices gravid aisuscom vivera accumsan facilisis</p>
                        <div class="image">
                            <img src="{{ asset('assets/images/reviews/feedback-author1.jpg') }}" alt="Authro">
                            <img class="bg" src="{{ asset('assets/images/reviews/feedback-author-bg.png') }}" alt="Background">
                        </div>
                    </div>
                    <div class="feedback-author">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <div class="title">
                            <h4>Kenneth S. Smith</h4>
                            <span>CEO & Founder</span>
                        </div>
                        <div class="ratting">
                            <h6>Quality Foods</h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="feedback-item style-two wow fadeInUp delay-0-5s">
                    <div class="content-image">
                        <p>Sit amet consectetur adipiscing eiusmod tempor incididunt labore dolore magna aliqae euisum suspendisse ultrices gravid aisuscom vivera accumsan facilisis</p>
                        <div class="image">
                            <img src="{{ asset('assets/images/reviews/feedback-author2.jpg') }}" alt="Authro">
                            <img class="bg" src="{{ asset('assets/images/reviews/feedback-author-bg.png') }}" alt="Background">
                        </div>
                    </div>
                    <div class="feedback-author">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <div class="title">
                            <h4>Kenneth S. Slocum</h4>
                            <span>Business Manager</span>
                        </div>
                        <div class="ratting">
                            <h6>Quality Foods</h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feedback Section End -->


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
