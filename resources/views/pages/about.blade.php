@extends('pages.layout.app')
@section('content')

<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/backgrounds/breadcrumb-area-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h2>About Bank</h2>
                            </div>
                            <div class="breadcrumb-menu aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class="active">About {{ env('APP_NAME') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="intro-style1-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div class="intro-style1-video-gallery">
                            <div class="intro-style1-video-gallery-bg" style="background-image: url(assets/images/resources/intro-style1-video-gallery.jpg);">
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="intro-style1-content-box">
                            <div class="sec-title">
                                <h2>About {{ env('APP_NAME') }}</h2>
                            </div>
                            <div class="text">
                                <p class="lead">

                                    Our Swiss heritage, global presence	and financial stability makes us the leading corporate and financial service provider globally for international businesses.
                                </p>
                                <p class="lead">{{ env('APP_NAME') }} was founded in Cayman Islands in 2006 as a Corporate, Wealth and Trust service provider, offering incorporation financial services across 25+ different jurisdictions. Over the years, we have expanded and opened office in the Luxembourg, Belize and Switzerland. Our mission is to help entrepreneurs, business owners, investors across the world prosper by facilitating the creation of robust corporate structures. This has not changed since we started in 2006. We continue to utilize technology to provide an efficient and outstanding service to all our clients.

                                </p>
                                <p class="lead">While the core of our service remains company formation, we offer a multitude of ancillary services such as affordable home loan, personal &amp; Business IRA, Savings, Money Market &amp; CDs, Estate Planning &amp; Settlement, Investment Management, Financial Planning, and the provision of professional remote banking. Backed by our regulated licenses and extensive experience in financial services, {{ env('APP_NAME') }} experts have successfully assisted thousands of foreign clients to incorporate companies to expand their existing businesses or start new ventures.

                                </p>
                                <p class="lead">{{ env('APP_NAME') }} has received numerous awards by different authorities (both governmental and private), which strengthens our position as the world’s leading online company formation provider.
                                </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>

    <section class="choose-style1-area">
            <div class="container">
                <ul class="row choose-style1__content">

                    <!--Start Single Choose Style1-->
                    <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                        <div class="single-choose-style1">
                            <div class="icon">
                                <div class="icon-inner">
                                    <span class="icon-crowd"></span>
                                </div>
                                <div class="counting">01</div>
                            </div>
                            <div class="text">
                                <h3>Community</h3>
                                <p>Must explain to you how work mistaken give you complete guide they
                                    cannot foresee pain.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Choose Style1-->

                    <!--Start Single Choose Style1-->
                    <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                        <div class="single-choose-style1">
                            <div class="icon">
                                <div class="icon-inner">
                                    <span class="icon-commitment"></span>
                                </div>
                                <div class="counting">02</div>
                            </div>
                            <div class="text">
                                <h3>Commitment</h3>
                                <p>Business it will frequently occur that pleasures have to be repudiated and
                                    annoyances accepted.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Choose Style1-->

                    <!--Start Single Choose Style1-->
                    <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                        <div class="single-choose-style1">
                            <div class="icon">
                                <div class="icon-inner">
                                    <span class="icon-consistency"></span>
                                </div>
                                <div class="counting">03</div>
                            </div>
                            <div class="text">
                                <h3>Consistency</h3>
                                <p>Being able to do what we like best every pleasure is to be welcomed and pain
                                    avoided but in certain.</p>
                            </div>
                        </div>
                    </li>
                    <!--End Single Choose Style1-->

                </ul>
            </div>
        </section>



@endsection
