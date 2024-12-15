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
    <section class="page-banner text-white py-165 rpy-130"
             style="background-image: url({{ asset('assets/images/banner/banner.jpg') }});">
        <div class="container">
            <div class="banner-inner">
                <h1 class="page-title wow fadeInUp delay-0-2s">404 Page</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">404</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Error Section Start -->
    <section class="error-section rel z-1 py-130 rpy-100">
        <div class="container">
            <div class="error-inner text-center wow fadeInUp delay-0-2s">
                <div class="image mb-70">
                    <img src="{{ asset('assets/images/404.png') }}" alt="404 Error">
                </div>
                <div class="content">
                    <div class="section-title mb-20">
                        <h2>Sorry This Page Can’t Be Found</h2>
                    </div>
                    <p>Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        suspendisse ultrices gravida commodo viverra maecenas accumsan</p>
                    <a href="{{ url('/') }}" class="theme-btn style-three mt-15">Goto Home <i
                            class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        <div class="error-shapes">
            <img class="two-leaf" src="{{ asset('assets/images/slider/two-lear.png') }}" alt="Leaf">
            <img class="half-leaf" src="{{ asset('assets/images/slider/half-leaf.png') }}" alt="Leaf">
            <img class="leaf-two" src="{{ asset('assets/images/shapes/leaf-1.png') }}" alt="Leaf">
            <img class="leaf-three" src="{{ asset('assets/images/shapes/leaf-2.png') }}" alt="Leaf">
        </div>
    </section>
    <!-- Error Section End -->

    @include('partials.footer')

</div>

@include('partials.scripts')

</body>

</html>
