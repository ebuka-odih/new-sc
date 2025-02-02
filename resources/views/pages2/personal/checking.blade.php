@extends('pages.layout.app')
@section('content')
    <style>
        li{
            padding: 5px;
        }
        i {
            color: #0dcaf0;
        }
    </style>


    <section class="breadcrumb-area mb-3">
            <div class="breadcrumb-area-bg" style="background-image: url(../img2/breadcrumb-area-bg-3.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title aos-init" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h2>Personal Checking Account</h2>
                            </div>
                            <div class="breadcrumb-menu aos-init" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <ul style="visibility: hidden">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="accounts.html">Accounts</a></li>
                                    <li class="active">Savings Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<div>


    <section class="tp-postbox-area pt-120 pb-120">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('img2/1.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Basic Checking
                                </h5>
                                <p class="card-text">
                                    The simple choice for your day-to-day checking
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum opening balance required</li>
                                <li class="list-group-item">No monthly service charge with direct deposit</li>
                                <li class="list-group-item">Free eStatements</li>
                                <li class="list-group-item">Free online banking &amp; bill pay</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://shirecityb.com/signup/personal-info" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('img2/2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Interest Checking
                                </h5>
                                <p class="card-text">
                                    Earn more interest as your balance grows.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum opening balance required</li>
                                <li class="list-group-item">Competitive interest rates</li>
                                <li class="list-group-item">Free eStatements</li>
                                <li class="list-group-item">Free online banking &amp; bill pay</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://shirecityb.com/signup/personal-info" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('img2/3.avif') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">55+ Interest Checking
                                </h5>
                                <p class="card-text">
                                    Pays interest and other benefits if you're over 55.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum balance requirements</li>
                                <li class="list-group-item">No monthly service charge</li>
                                <li class="list-group-item">Free eStatements &amp; standard checks</li>
                                <li class="list-group-item">Free online banking &amp; bill pay</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://shirecityb.com/signup/personal-info" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                    <div class="row">

                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="tp-postbox-wrapper">
                            <article class="tp-postbox-item-wrapper mb-80">

                                <h3 class="tp-postbox-title2">Features Account:</h3>
                                <p>It is an account to manage your salary and help you organize your money, let him have a monthly savings while enjoying many other benefits:</p>

                                <div class="tp-sidebar-widget-content mt-3 mb-3">
                                    <ul>
                                        <li><a><i class="fas fa-chevron-right"></i> No management fee or handling.</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> It allows you to separate your savings silver in the same account, without needing an additional product.</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> Unlimited free consultations through our Amiga, Website, Mobile Banking and Mobile Application Line (downloading our app for smartphones).</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> Free notifications.</a></li>
                                    </ul>
                                </div>
                                <hr>
                                <h4>More Features</h4>
                                <div class="tp-sidebar-widget-content mt-3 mb-3">
                                    <ul>
                                        <li><a><i class="fas fa-chevron-right"></i> For security, you will receive a text message to the phone and / or email that tells about transactions equal to or greater than $ 50,000 for retirement amounts, deposits and $ 100,000 to 200,000 for purchases.</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> Free all transfers between the pocket and the saving account.</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> Set the savings from $ 5,000 monthly or fortnightly on the "pocket saving" Salary Account My friend; in the time you need will be available.</a></li>
                                        <li><a><i class="fas fa-chevron-right"></i> Chip debit card has to perform all their transactions safely.</a></li>
                                    </ul>
                                </div>

                            </article>


                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!--Start Benefits Area-->
        <section class="benefits-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Benefits for Account Holders</h2>
                    <div class="sub-title">
                        <p>We help businesses and customers achieve more.</p>
                    </div>
                </div>
                <ul class="row benefits-content text-center">

                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-high"></span>
                            </div>
                            <div class="text">
                                <h3>Earn Interest up to 7%</h3>
                                <p>Grow your savings with competitive interest rates.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->
                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-notification"></span>
                            </div>
                            <div class="text">
                                <h3>Email Alerts</h3>
                                <p>Stay updated with real-time alerts on account activity.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->
                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-safebox"></span>
                            </div>
                            <div class="text">
                                <h3>Discounts on Locker</h3>
                                <p>Enjoy exclusive discounts on safe deposit locker rentals.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->


                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-credit-card-2"></span>
                            </div>
                            <div class="text">
                                <h3>International Debit Cards</h3>
                                <p>Access your money worldwide with secure debit cards.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->
                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-shield-1"></span>
                            </div>
                            <div class="text">
                                <h3>Provides Safety</h3>
                                <p>Experience advanced security features to protect your account.
                                </p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->
                    <!--Start Single Benefits Box Colum-->
                    <li class="col-xl-4 single-benefits-box-colum">
                        <div class="single-benefits-box">
                            <div class="icon">
                                <span class="icon-paperless"></span>
                            </div>
                            <div class="text">
                                <h3>Mobile Banking</h3>
                                <p>Access your accounts anytime, anywhere with secure mobile banking features.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Benefits Box Colum-->

                </ul>
            </div>
        </section>
        <!--End Benefits Area-->




</div>

@endsection
