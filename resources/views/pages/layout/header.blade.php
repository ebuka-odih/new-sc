<header class="main-header main-header-style3">

            <!--Start Main Header Style3 Top-->
            <div class="main-header-style3__top">
                <div class="auto-container">
                    <div class="outer-box">

                        <!--Start Main Header Style3 Top Left-->
                        <div class="main-header-style3__top-left">
                            <div class="header-menu-style1">
                                <ul>

                                </ul>
                            </div>
                        </div>
                        <!--End Main Header Style3 Top Left-->

                        <!--Start Main Header Style3 Top Right-->
                        <div class="main-header-style3__top-right">
                            <div class="header-contact-info-style1">
                                <ul>
                                    <li><span class="icon-map"></span>
                                     25 Kingsway Street,
                                      Canary Wharf, London,
                                      E14 5HP,
                                      United Kingdom.
                                    </li>
                                    <li><span class="icon-clock"></span> 9am to 5pm, Sun Holiday</li>
                                </ul>
                            </div>
                        </div>
                        <!--End Main Header Style3 Top Right-->

                    </div>
                </div>
            </div>
            <!--End Main Header Style3 Top-->

            <nav class="main-menu main-menu-style3">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-menu-style3-left">
                                <div class="logo-box-style3">
                                    <a href="{{ route('index') }}">
                                        <h3 style="font-weight: bolder">{{ env('APP_NAME') }}</h3>
{{--                                        <img src="assets/images/resources/logo-3.png" alt="Awesome Logo" title="">--}}
                                    </a>
                                </div>
                            </div>

                            <div class="main-menu-style3-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="icon-menu"></i>
                                    </a>

                                    <ul class="main-menu__list">
                                        <li class=" megamenu">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>


                                        <li class="dropdown">
                                            <a href="#">Personal Banking</a>
                                            <ul>
                                                <li><a href="{{ route('personal.checking') }}">Checking</a></li>
                                                <li><a href="{{ route('personal.savings') }}">Savings, Money & CDS</a></li>
                                                <li><a href="{{ route('personal.ira') }}">Individual Retirement Account</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Corporate Banking</a>
                                            <ul>
                                                <li><a href="{{ route('business.checking') }}">Checking</a></li>
                                                <li><a href="{{ route('business.savings') }}">Savings, Money & CDS</a></li>
                                                <li><a href="{{ route('business.ira') }}">Business IRA</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Wealth Management</a>
                                            <ul>
                                                <li><a href="{{ route('wealth.trust-service') }}">Trust Service</a></li>
                                                <li><a href="{{ route('wealth.estate-planning') }}">Estate Planning</a></li>
                                            </ul>
                                        </li>



                                    </ul>
                                </div>
                            </div>

                           <div class="main-menu-style1-right">
                                <div class="header-btn-one">
                                    <a href="{{ route('login') }}" target="_blank">
                                        <span class="icon-home-button"></span>Login
                                    </a>
                                    <a class="style2" href="{{ route('reg_new_account') }}" target="_blank">
                                        <span class="icon-payment"></span>Open an Account
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>

        </header>
