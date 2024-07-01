<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.net/site-template/dilabs/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:57:25 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dilabs - Creative Digital Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Pegasus - 400</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/PEGASUS-W.ico') }}" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <header>
        <!-- Start Navigation -->
        <nav
            class="navbar navbar-common mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/user/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <img src="{{ asset('assets/user/img/logo.png') }}" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="{{ url('/') }}" class="dropdown-toggle" style="{{ Request::is('/') ? 'color: #2667FF; opacity: 1;' : '' }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}" class="dropdown-toggle" style="{{ Request::is('about-us') ? 'color: #2667FF; opacity: 1;' : '' }}">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="{{ Request::is('service/*') ? 'color: #2667FF; opacity: 1;' : '' }}">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/service/solusi') }}">Solusi</a></li>
                                <li><a href="{{ url('/service/layanan-handal-responsif') }}">Layanan Handal & Responsif</a></li>
                                <li><a href="{{ url('/service/memberi-manfaat-bagi-masyarakat') }}">Memberi Manfaat Bagi Masyarakat</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/portfolio') }}" class="dropdown-toggle" style="{{ Request::is('portfolio') ? 'color: #2667FF; opacity: 1;' : '' }}">Portofolio</a></li>
                        <li><a href="{{ url('/blog') }}" class="dropdown-toggle" style="{{ Request::is('blog') ? 'color: #2667FF; opacity: 1;' : '' }}">Blog</a></li>
                        <li><a href="{{ url('/contact-us') }}" style="{{ Request::is('contact-us') ? 'color: #2667FF; opacity: 1;' : '' }}">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">

                    @yield('attr-nav')

                    @yield('side-menu')
                    <!-- Main Nav -->
                </div>
                <!-- Overlay screen for menu -->
                <div class="overlay-screen"></div>
                <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->


    <!-- Start 404
    ============================================= -->
    <div class="error-page-area default-padding text-center bg-cover" style="background-image: url({{ asset('assets/user/img/shape/banner-3.jpg') }});">
        <!-- Shape -->
        <div class="shape-left" style="background: url({{ asset('assets/user/img/shape/44-left.png') }});"></div>
        <div class="shape-right" style="background: url({{ asset('assets/user/img/shape/44-right.png') }});"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="error-box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>400</h1>
                        <h2>Bad Request!</h2>
                        <a class="btn mt-20 btn-md btn-theme" href="/">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

     <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url('{{ asset('assets/user/img/shape/5.png') }}');">
        <div class="container">
            <div class="f-items default-padding-bottom pt-70 pt-xs-0">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="footer-animated-shape">
                            <img src="{{ asset('assets/user/img/shape/6.png') }}" alt="Image Not Found">
                        </div>
                        <div class="f-item about pr-50 pr-xs-0 pr-md-0">
                            <img class="logo" src="{{ asset('assets/user/img/logo-light.png') }}" alt="Logo">
                            <p>
                                Are off under folly death writter transforming cold regular. Almost do am or limits of hearts.
                            </p>
                            <div class="footer-social mt-30">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
                        <div class="f-item link">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li><a href="{{ url('/about-us') }}">Company Profile</a></li>
                                <li><a href="{{ url('/about-us') }}">About</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        Jl. C. Simanjuntak 37, Yogyakarta, Indonesia
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:info@pegasusoindonesia.co.id">info@pegasusindonesia.co.id</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:+62 274515555">(+62) 274 515555</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>
                                Join our subscribers list to get the instant latest news and special offers.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom bg-dark text-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Copyright &copy; 2023 Atozen. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/user/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/user/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/user/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.scrolla.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/dilabs/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:57:26 GMT -->
</html>
