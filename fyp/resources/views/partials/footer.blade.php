<!-- Footer Area Start -->
<footer class="main-footer bg-green text-white">
    <div class="container">
        <div class="footer-top-newsletter py-80 mb-75">
            <div class="section-title">
                <h2>Newsletter Subscribe</h2>
            </div>
            <form action="#">
                <input type="email" placeholder="Email Address" required>
                <button class="theme-btn">Subscribe now <i class="fas fa-angle-double-right"></i></button>
            </form>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 order-md-2">
                <div class="footer-widget about-widget text-center">
                    <div class="footer-logo mb-30">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <p>Sit amet consectetur adipiscing elit sed eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. quis ipsum suspendisse ultrices gravida.</p>
                    <div class="social-style-two pt-10">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-md-1">
                <div class="footer-widget menu-widget two-column">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/documentation') }}">Documentation</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/elements') }}">Elements</a></li>
                        <li><a href="{{ url('/projects') }}">Our Projects</a></li>
                        <li><a href="{{ url('/products') }}">Best Products</a></li>
                        <li><a href="{{ url('/farmers') }}">Meet Farmers</a></li>
                        <li><a href="{{ url('/technology') }}">Technology</a></li>
                        <li><a href="{{ url('/news') }}">Latest News</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        <li><a href="{{ url('/vegetables') }}">Vegetables</a></li>
                        <li><a href="{{ url('/privacy') }}">Setting & Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-md-3">
                <div class="footer-widget contact-widget">
                    <h4 class="footer-title">Contact Us</h4>
                    <p>Quis autem vel eum reprehenderit voluptate velit esse quamnue </p>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            53 Main Street, 2nd Mountain 3rd Floor, New York
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="tel:+01234567899">+012 (345) 678 99</a>
                        </li>
                        <li>
                            <i class="far fa-phone"></i>
                            <a href="mailto:support@gmail.com">support@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-25 pb-10">
            <p>Copyright © 2022 MunFirm. All Rights Reserved.</p>
            <ul class="footer-menu">
                <li><a href="{{ url('/privacy') }}">Setting & Privacy</a></li>
                <li><a href="{{ url('/faqs') }}">Faqs</a></li>
                <li><a href="{{ url('/payments') }}">Payments</a></li>
            </ul>

            <!-- Scroll Top Button -->
            <button class="scroll-top scroll-to-target" data-target="html">
                <span class="fas fa-angle-double-up"></span>
            </button>
        </div>
    </div>
    <div class="footer-shapes">
        <img class="footer-bg" src="{{ asset('assets/images/background/footer-bg-shape.png') }}" alt="Shape">
        <img class="shape-one" src="{{ asset('assets/images/shapes/footer1.png') }}" alt="Shape">
        <img class="shape-two" src="{{ asset('assets/images/shapes/footer2.png') }}" alt="Shape">
        <img class="shape-three" src="{{ asset('assets/images/shapes/footer3.png') }}" alt="Shape">
        <img class="shape-four" src="{{ asset('assets/images/shapes/footer4.png') }}" alt="Shape">
    </div>
</footer>
<!-- Footer Area End -->
