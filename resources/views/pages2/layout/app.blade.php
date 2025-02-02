<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicons Icons -->
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/thm-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}" />

        <!-- Module css -->
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/01-header-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/02-banner-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/03-about-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/04-fact-counter-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/05-testimonial-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/06-partner-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/07-footer-section.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/module-css/08-blog-section.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/css/module-css/09-breadcrumb-section.css') }}">

        <!-- Template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/color-2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

element.style {
}
.handle-preloader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--thm-base);
    display: flex;
    display: -ms-flexbox;
    align-items: center;
    -webkit-align-items: center;
    justify-content: center;
    -webkit-justify-content: center;
    z-index: 9999999;
}
    </style>

    <style>
        li{
            padding: 5px;
            font-size: 17px;
        }
        i {
            color: #0dcaf0;
        }
    </style>
</head>


<body>

    <!-- Start preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="r" class="letters-loading">
                            r
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                        <span data-text-preloader="d" class="letters-loading">
                            d
                        </span>
                        <span data-text-preloader="w" class="letters-loading">
                            W
                        </span>
                        <span data-text-preloader="o" class="letters-loading">
                            O
                        </span>
                        <span data-text-preloader="o" class="letters-loading">
                            O
                        </span>
                        <span data-text-preloader="d" class="letters-loading">
                            D
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End preloader -->


    <div class="page-wrapper">
        @include('pages.layout.header')


        <div class="stricky-header stricky-header--style3 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('content')

        <!--Start footer area -->
        <footer class="footer-area footer-area--style3">

            <!--Start Footer Top-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                            <div class="single-footer-widget single-footer-widget--link-box">
                                <div class="our-company-info">
                                    <div class="footer-logo-style1">
                                        <a href="{{ route('index') }}">
                                            <h4 class="text-white fw-bolder">{{ env('APP_NAME') }}</h4>
                                        </a>
                                    </div>
                                    <div class="bottom-text">
                                        <p>Our commitment is to empower individuals, businesses, and communities to reach new heights with trust, integrity, and innovation.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                            <div class="single-footer-widget single-footer-widget--link-box">
                                <div class="title">
                                    <h3>Useful Links</h3>
                                </div>
                                <div class="footer-widget-links">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('about') }}">Our Story</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                            <div class="single-footer-widget single-footer-widget--link-box">
                                <div class="title">
                                    <h3>Services</h3>
                                </div>
                                <div class="footer-widget-links">
                                    <ul>
                                        <li><a href="{{ route('personal.checking') }}">Personal Account</a></li>
                                        <li><a href="{{ route('business.checking') }}">Business Account</a></li>
                                        <li><a href="{{ route('wealth.trust-service') }}">Wealth Management</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
                            <div class="single-footer-widget single-footer-widget--link-box">
                                <div class="find-nearest-branch-box-style2">
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <h3>Redwood Bank</h3>
                                    <address>
                                      25 Kingsway Street,<br>
                                      Canary Wharf, London,<br>
                                      E14 5HP,<br>
                                      United Kingdom.<br>
                                      <abbr title="Phone">Phone:</abbr> +44 20 7946 0123<br>
                                      <a href="mailto:info@redwoodcityb.com">info@redwoodcityb.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                    </div>
                </div>
            </div>
            <!--End Footer Top-->


            <div class="footer-bottom">
                <div class="container">
                    <div class="bottom-inner">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Online Security Tips</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
        <!--End footer area-->


    </div>
    <!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
                <i class="fas fa-plus"></i>
            </span>
            <div class="logo-box">
                <a href="{{ route('index') }}" aria-label="logo image">
                    <h4>{{ env('APP_NAME') }}</h4>
{{--                    <img src="assets/images/resources/mobile-nav-logo.png" alt="" />--}}
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@redwoodcity.com">info@redwoodcity.com</a>
                </li>
            </ul>

        </div>
    </div>


    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="icon-chevron"></i>
    </a>





   <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/extra-scripts/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/vendors/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>

<!-- Template js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>



</body>
</html>
