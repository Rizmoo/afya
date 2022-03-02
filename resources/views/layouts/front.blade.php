<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Oxalis" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom CSS -->
    <link href="{{ asset('front/assets/css/styles.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>


<div id="main-wrapper">

    <div class="header header-light dark-text">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="assets/img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
                                    <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="{{ route('shop.blog') }}">Blog</a></li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="{{ route('login') }}" class="ft-medium">
                                <i class="lni lni-user mr-2"></i>Sign In
                            </a>
                        </li>
                        <li class="add-listing theme-bg">
                            <a href="{{ route('register') }}" >
                                <i class="lni lni-circle-plus mr-1"></i> Register
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>


    @yield('content')

    {{ $slot ?? '' }}






    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />

                            <div class="address mt-2">
                                3298 Grant Street Longview, New Texox<br>United Kingdom 75601
                            </div>
                            <div class="address mt-3">
                                1-202-555-0106<br>support@workplex.com
                            </div>
                            <div class="address mt-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="footer-bottom br-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© {{ date('Y') }} . Designd By <a href="#">Oxalis Tech</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->


    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>

<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/js/slick.js') }}"></script>
<script src="{{ asset('front/assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('front/assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('front/assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('front/assets/js/custom.js') }}"></script>
@livewireScripts
@include('includes.notification-scripts')

@stack('scripts')
</body>
</html>
