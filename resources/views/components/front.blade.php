<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ asset('fovia/all.css') }}">
    <title>Fovia - Medical Doctor & Healthcare Clinic HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('') }}fovia/assets/img/favicon.png">

    @livewireStyles
</head>
<body>



<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="header-contact-info">
                        <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 19:00</li>
                        <li><i class="fas fa-phone"></i> Call Us: <a href="#">+07 554 332 322</a></li>
                        <li><i class="fas fa-paper-plane"></i> Email Us: <a href="#">info@site.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="header-right-content">
                        <ul class="top-header-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="lang-select">
                            <select>
                                <option>Eng</option>
                                <option>Spa</option>
                                <option>Ara</option>
                                <option>Fre</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="fovia-responsive-nav">
            <div class="container">
                <div class="fovia-responsive-menu">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('') }}logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fovia-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('fovia/assets/img/logo.png') }}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="{{ route('shop.doctors') }}" class="nav-link">Doctors</a></li>
                            <li class="nav-item"><a href="{{ route('shop.providers') }}" class="nav-link">Hospitals</a></li>
                            <li class="nav-item"><a href="{{ route('shop.blogs') }}" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-options">
                            <div class="option-item"><i class="search-btn fas fa-search"></i>
                                <i class="search-close-btn fas fa-times"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>

{{ $slot ?? '' }}

@yield('content')



<section class="footer-area">
    <div class="container">
        <div class="subscribe-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="newsletter-content">
                        <h2>Join Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        <button type="submit">Subscribe <i class="fas fa-paper-plane"></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img src="assets/img/white-logo.png" alt="image"></a>
                        <p>Powerfully flexible html template for medical & health related organizations, institutes, clinics and businesses.</p>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Departments</h3>
                    <ul class="departments-list">
                        <li><a href="#">Surgery and Radiology</a></li>
                        <li><a href="#">Departments</a></li>
                        <li><a href="#">Family</a></li>
                        <li><a href="#">Our Doctors</a></li>
                        <li><a href="#">Woman's Health</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Links</h3>
                    <ul class="links-list">
                        <li><a href="#">Optician</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Pediatrics</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Dermatology</a></li>
                        <li><a href="#">Doctors</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Opening Hours</h3>
                    <ul class="opening-hours">
                        <li>Mon - Tues <span>9.00AM - 17.00PM</span></li>
                        <li>Wednesday <span>9.00AM - 17.00PM</span></li>
                        <li>Thursday <span>9.00AM - 17.00PM</span></li>
                        <li>Friday <span>9.00AM - 17.00PM</span></li>
                        <li>Saturday <span>Closed</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright <i class="far fa-copyright"></i> 2021 Fovia. Design & Developed by <a href="https://oxalistech.co.ke" target="_blank">Oxalis Tech</a></p>
        </div>
    </div>
</section>

<div class="go-top"><i class="fas fa-chevron-up"></i></div>



<script src="{{ asset('fovia/all.js') }}"></script>
@include('includes.notification-scripts')
@yield('content')
@stack('modals')
@stack('scripts')
@livewireScripts
</body>
</html>
