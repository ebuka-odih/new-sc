@extends('pages.layout.app')
@section('content')
    <style>
        p {
    line-height: 1.9rem;
}
    </style>


    <section class="breadcrumb-area mb-3">
            <div class="breadcrumb-area-bg" style="background-image: url(../img2/breadcrumb-area-bg-3.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title aos-init" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                                <h2>TRUST SERVICES</h2>
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


    <section class="tp-postbox-area pt-120 pb-120 mb-4">

            <div class="container">

                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div>
                            <h3 class="mt-3 mb-3">As your fiduciary, we are committed to upholding your wishes.</h3>

                            <p >Establish the administration and management of your trust to ensure that your wishes, as expressed in the trust, are followed. A well-executed estate plan will include preparation and filing of tax returns, payment of bills and disbursement of income, and disposition of assets after death.</p>

                            <h3 class="mt-3 mb-3">Why Choose {{ env('APP_NAME') }}?</h3>

                            <p>In creating a road map to help build, protect, and transition your wealth, we look at your financial situation holistically. We understand that you have big dreams for your future. That’s why we take time to get to know you &amp; your family and learn about your financial aspirations. We ask authentic questions designed to get at the root of your goals and values, challenge your current path, and clarify your strategic choices. And we create solutions and opportunities based on alternative ways of thinking, serving as your guide at every stage of your journey.</p>


                        </div>
                    </div>


                </div>
            </div>
        </section>




</div>

@endsection
