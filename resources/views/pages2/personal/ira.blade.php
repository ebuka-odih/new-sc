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
                                <h2>Personal Savings Account</h2>
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
                <div class="mb-5 text-center">
                    <h4>
                        The time is now to start saving for retirement.
                    </h4>
                    <p>Saving for retirement with an IRA offers a number of benefits. We're here to help you choose the right option based on your current needs and future retirement savings goals. What’s more, you can choose from Traditional or Roth IRA when opening your account.

                    </p>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <img style="height: 350px" src="{{ asset('img2/7.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">IRA Savings
                                </h5>
                                <p class="card-text">
                                    Saving money with an IRA savings account allows you to add more to your account at any time.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum balance required to open</li>
                                <li class="list-group-item">Additional deposits as little as $5 can be made at any time</li>
                                <li class="list-group-item">Traditional and Roth IRAs available</li>
                                <li class="list-group-item">Flexible savings solution with minimal investment risk &amp; FDIC Insurance</li>
                                <li class="list-group-item">Competitive interest rates</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('reg_new_account') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <img style="height: 350px"  src="{{ asset('img2/8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CD IRA
                                </h5>
                                <p class="card-text">
                                    Save with the guaranteed interest of a CD with the tax advantages of a retirement account.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">Open with as little as $500</li>
                                <li class="list-group-item">Multiple term options to meet your timeframe</li>
                                <li class="list-group-item">Traditional or Roth IRA options available</li>
                                <li class="list-group-item">Tax-advantaged and FDIC-insured</li>
                                <li class="list-group-item">Competitive interest rates and fixed terms</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('reg_new_account') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">



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
