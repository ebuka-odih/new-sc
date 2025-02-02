@extends('pages.layouts.app')
@section('content')

    <main id="primary" class="site-main">
        <section class="banking-banner home-banner banner-overlay business-banking" style="background-image: url(../front/wp-content/uploads/2022/04/New-Project-98.png);background-repeat: no-repeat;background-size: cover;background-position: center;">
            <div class="container">
                <div class="d-flex">
                    <div class="left-banner">
                        <h1 class="text-white">Business Banking</h1>
                        <div class="banner-content text-white"><p>Solid Business Banking takes a particular type of financial institution: large enough to underwrite multi-million-dollar loans and experienced enough to understand the challenge of running a small business. Our commercial banking team has the expertise to listen, advise and advance your business.</p>
                        </div>
                        <a class="mt-25 d-inblock red-btn margin-l-10" href="{{ route('contact-us') }}" target="">LET’S TALK</a>

                    </div>
                    <div class="right-banner">
                        <div class="mobile-image">
                            <div class="payment-details">
                                <div class="transfer-wrap align-center d-flex">
                                    <img width="40px" height="40px" alt="red check mark" data-src="https://inbank.com/wp-content/uploads/2022/04/Check-Mark-Red.svg" class=" lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/Check-Mark-Red.svg"><noscript><img width="40px" height="40px" src="../wp-content/uploads/2022/04/Check-Mark-Red.svg" alt="red check mark"></noscript>
                                    <p>Transfer was successful<span>$320.00</span></p>
                                </div>

                                <div class="received-wrap">
                                    <p class="payment-text">Payment Received!</p>
                                    <img width="40px" height="40px" alt="down arrow" data-src="https://inbank.com/wp-content/uploads/2022/04/Arrow-Circle-Red.svg" class=" ls-is-cached lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/Arrow-Circle-Red.svg"><noscript><img width="40px" height="40px" src="../wp-content/uploads/2022/04/Arrow-Circle-Red.svg" alt="down arrow"></noscript>
                                    <p class="amount-text">$320.00</p>
                                </div>

                                <div class="earnings-wrap">
                                    <div class="earnings-top">
                                        <img width="40px" height="40px" alt="Business Banking Icon" data-src="https://inbank.com/wp-content/uploads/2022/04/Business-Banking-Desktop.png" class=" lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/Business-Banking-Desktop.png"><noscript><img width="40px" height="40px" src="../wp-content/uploads/2022/04/Business-Banking-Desktop.png" alt="Business Banking Icon"></noscript>
                                        <div>
                                            <p class="earnings-text">Earnings</p>
                                            <p class="earnings-amount">$5,470.00</p>
                                        </div>
                                    </div>

                                    <table class="earning-table">
                                        <thead>
                                        <tr>
                                            <th> Client</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>PVC Contractors Inc.  </td>
                                            <td>03/21/22 </td>
                                            <td>$6,700.00 </td>
                                        </tr>
                                        <tr>
                                            <td>Brad’s Electric LLC</td>
                                            <td>03/20/22 </td>
                                            <td>$820.00 </td>
                                        </tr>
                                        <tr>
                                            <td>Solid Rock Paving</td>
                                            <td>03/19/22</td>
                                            <td>$3,420.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="who-we-are-sec">
            <div class="custom-container" style="margin-left: 0px;">
                <div class="d-flex">
                    <div class="who-we-are-wrap">
                        <div class="who-we-are-inner">
                            <h2 class="">We Believe In The Lost Art of Relationship Banking</h2>
                            <div class="content-wrap mt-10"><p>We’ll tailor our services to your needs and partner with you for long-term success — whether you’re just starting out and need the basics or you’re ready to expand and give your competition a run for their money.</p>
                            </div>
                            <a class="mt-25 d-inblock red-btn" href="{{ route('contact-us') }}" target="">LET’S TALK</a>
                        </div>
                    </div>
                    <div class="testimonials-wrap d-flex layout2">
                        <div class="testimonials-inner-wrap">
                            <img class="lazyload-disabled" id="testimonialImage" src="../front/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg" width="749" alt="Online Business Checking Account">

                            <div class="testimonials-carousel">
                                <span class="about-bubble-text">Shirecity business banking is built to help you grow.</span>
                                <div class="owl-carousel owl-theme owl-loaded owl-drag">













                                    <div class="owl-stage-outer owl-height" style="height: 636px;"><div class="owl-stage" style="transform: translate3d(-3752px, 0px, 0px); transition: all 0s ease 0s; width: 14472px;"><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Creating a business banking relationship with Shirecity is one of the best decisions we’ve made. We are their focus and they offer products and services that help businesses like ours become industry leaders.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Stephen Kaczmarek</p>
                                                            <p class="client-about">CEO - Borealis Fat Bike</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity is our partner because they believe in better as well. Their out-of-the-box banking approach has made our banking experience with them our best banking experience. Their game-changing constant contact and fast decision making have made us a loyal customer.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Derek Vidmar</p>
                                                            <p class="client-about">Owner Vidmar Motor Company</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been instrumental as our banking partner. Their personable nature and easy-to-work with attitude make them our choice in the banking arena.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Susan Spencer</p>
                                                            <p class="client-about">Owner Spencer’s Market</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity shares the reputation of being business friendly. They are an easy-to-work with bank and we value the service and personal attention we receive from them.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Ike Drury</p>
                                                            <p class="client-about">Drury Brothers Roofing</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Choosing local is an intentional lifestyle that we at Eve’s Revolution share with our patrons and our bank. We have been doing business with Shirecity from the very start. At Shirecity they believe that banking is personal; it’s relationship-based, not transaction-based. Shirecity invests in you – in human capital: the thinkers, the creators, the builders that rocket us into future generations.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Eve Carlson</p>
                                                            <p class="client-about">Owner of Eve’s Revolution </p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity saw our potential and helped us build a community that will change the way Puebloans live. They helped us study our vision and craft an opportunity that Pueblo can be proud of. Not many businesses take such an active role in seeing their customers succeed. That’s the difference our bank makes.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Jim Gilbertson</p>
                                                            <p class="client-about">Developer Vista Custom Homes</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been our bank from the beginning. They offer a friendly bank atmosphere and a can-do attitude. We appreciate their family values and willingness to go the extra mile to have a satisfied customer.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Dennis Zabukovic</p>
                                                            <p class="client-about">Owner Zabukovic Motors</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item active" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been much easier to work with and I am receiving personalized service I never could have received with my previous bank. I rarely have to go into the bank anymore because Shirecity customized the amount that I can deposit using my phone or scanner. The lending process was very collaborative and efficient as well. Now we have a banker that knows us, is responsive to us and customizes solutions for my company. Brett and his team’s knowledge have been an incredible asset to keep my company growing and secure. What a difference the right bank can make!”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Alyssa Carrier</p>
                                                            <p class="client-about">Founder + CEO, AC Disaster Consulting</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Like us, Shirecity believes in relationships and they believe in those they serve.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Rocky Khosla</p>
                                                            <p class="client-about">MD</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity is our bank of choice. Their focus on long-term, meaningful relationships matches our service philosophy. Their “know you by name” culture makes us feel welcome and appreciated.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Dr. Cindy</p>
                                                            <p class="client-about">Compton Principle Swallow Charter School </p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p> “We work closely with Shirecity as our business partner. Shirecity holds true to the same business principles we trust and believe in. Their assistance and tradition of excellence gives us a superior position in today’s marketplace.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Micheal Thibault</p>
                                                            <p class="client-about">T-Bone Construction President</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity locally partnered with us on The Pinery and their attention to detail is what has brought us back time and time again. A successful formula of our values of excellence, service, and hospitality has earned them our banking business and made them an extraordinary collaborator for businesses of every size.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Mitchell Yellen</p>
                                                            <p class="client-about">Owner Altitude Hospitality</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“We are proud of our growth and recognize that Shirecity has been a key part of our business banking success. Shirecity is a rock solid partner that takes LOCAL banking to a whole new level.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Rhonda Lewis</p>
                                                            <p class="client-about">Owner - Rocky Mountain Landscape</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Creating a business banking relationship with Shirecity is one of the best decisions we’ve made. We are their focus and they offer products and services that help businesses like ours become industry leaders.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Stephen Kaczmarek</p>
                                                            <p class="client-about">CEO - Borealis Fat Bike</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity is our partner because they believe in better as well. Their out-of-the-box banking approach has made our banking experience with them our best banking experience. Their game-changing constant contact and fast decision making have made us a loyal customer.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Derek Vidmar</p>
                                                            <p class="client-about">Owner Vidmar Motor Company</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been instrumental as our banking partner. Their personable nature and easy-to-work with attitude make them our choice in the banking arena.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Susan Spencer</p>
                                                            <p class="client-about">Owner Spencer’s Market</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity shares the reputation of being business friendly. They are an easy-to-work with bank and we value the service and personal attention we receive from them.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Ike Drury</p>
                                                            <p class="client-about">Drury Brothers Roofing</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Choosing local is an intentional lifestyle that we at Eve’s Revolution share with our patrons and our bank. We have been doing business with Shirecity from the very start. At Shirecity they believe that banking is personal; it’s relationship-based, not transaction-based. Shirecity invests in you – in human capital: the thinkers, the creators, the builders that rocket us into future generations.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Eve Carlson</p>
                                                            <p class="client-about">Owner of Eve’s Revolution </p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity saw our potential and helped us build a community that will change the way Puebloans live. They helped us study our vision and craft an opportunity that Pueblo can be proud of. Not many businesses take such an active role in seeing their customers succeed. That’s the difference our bank makes.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Jim Gilbertson</p>
                                                            <p class="client-about">Developer Vista Custom Homes</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been our bank from the beginning. They offer a friendly bank atmosphere and a can-do attitude. We appreciate their family values and willingness to go the extra mile to have a satisfied customer.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Dennis Zabukovic</p>
                                                            <p class="client-about">Owner Zabukovic Motors</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity has been much easier to work with and I am receiving personalized service I never could have received with my previous bank. I rarely have to go into the bank anymore because Shirecity customized the amount that I can deposit using my phone or scanner. The lending process was very collaborative and efficient as well. Now we have a banker that knows us, is responsive to us and customizes solutions for my company. Brett and his team’s knowledge have been an incredible asset to keep my company growing and secure. What a difference the right bank can make!”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Alyssa Carrier</p>
                                                            <p class="client-about">Founder + CEO, AC Disaster Consulting</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Like us, Shirecity believes in relationships and they believe in those they serve.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Rocky Khosla</p>
                                                            <p class="client-about">MD</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity is our bank of choice. Their focus on long-term, meaningful relationships matches our service philosophy. Their “know you by name” culture makes us feel welcome and appreciated.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Dr. Cindy</p>
                                                            <p class="client-about">Compton Principle Swallow Charter School </p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p> “We work closely with Shirecity as our business partner. Shirecity holds true to the same business principles we trust and believe in. Their assistance and tradition of excellence gives us a superior position in today’s marketplace.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Micheal Thibault</p>
                                                            <p class="client-about">T-Bone Construction President</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Shirecity locally partnered with us on The Pinery and their attention to detail is what has brought us back time and time again. A successful formula of our values of excellence, service, and hospitality has earned them our banking business and made them an extraordinary collaborator for businesses of every size.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Mitchell Yellen</p>
                                                            <p class="client-about">Owner Altitude Hospitality</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“We are proud of our growth and recognize that Shirecity has been a key part of our business banking success. Shirecity is a rock solid partner that takes LOCAL banking to a whole new level.” </p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Rhonda Lewis</p>
                                                            <p class="client-about">Owner - Rocky Mountain Landscape</p>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item cloned" style="width: 536px;"><div class="testimonial-content">
                                                    <div class="testimonial-text"><p>“Creating a business banking relationship with Shirecity is one of the best decisions we’ve made. We are their focus and they offer products and services that help businesses like ours become industry leaders.”</p>
                                                    </div>
                                                    <div class="testimonial-about d-flex align-center">
                                                        <div>
                                                            <p class="client-name">Stephen Kaczmarek</p>
                                                            <p class="client-about">CEO - Borealis Fat Bike</p>
                                                        </div>
                                                    </div>
                                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="red-arrow-circle-left red-circle"></i></button><button type="button" role="presentation" class="owl-next"><i class="red-circle red-arrow-circle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section><section id="services-sec" class="services-sections services-box-sec">
            <div class="custom-container" style="margin-left: 0px;">
                <div class="services-sec-wrap d-flex">
                    <div class="services-left light-bg">
                        <h2>Services Tailored to Fit Your Business</h2>
                        <a class="d-inblock red-btn mt-25" href="{{ route('contact-us') }}" target="">TALK TO A BANKER</a>
                    </div>
                    <div class="services-box-right">
                        <div class="services-box-slider">
                            <!-- <div class="owl-carousel owl-theme"> -->
                            <div class="services-row">                             <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Business Checking</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/06/intro-thankyou.jpg);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Business Concierge Experience</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/04/New-Project-13-1.jpg);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Business Lending</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/04/New-Project-2022-04-27T102611.933-1.png);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Business Savings</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/04/credit-card.jpg);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Business Credit Cards</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-box-wrap" style="background-image: url(../front/wp-content/uploads/2022/05/customer-service.jpg);">
                                    <a >
                                        <div class="services-post-content">
                                            <h3>Merchant Services</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>                    <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section><section class="image-gallery-content">
            <div class="container">
                <div class="d-flex">
                    <div class="image-gallery">
                        <div class="gallery-img-wrap">
                            <img alt="Mark Magnone" data-src="https://inbank.com/wp-content/uploads/2022/10/Mark-Magnone.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="../wp-content/uploads/2022/10/Mark-Magnone.jpg" alt="Mark Magnone"></noscript>
                        </div>
                        <div class="gallery-img-wrap">
                            <img alt="Andrea Garnett" data-src="https://inbank.com/wp-content/uploads/2022/06/Andrea-Garnett-scaled.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="../wp-content/uploads/2022/06/Andrea-Garnett-scaled.jpg" alt="Andrea Garnett"></noscript>
                        </div>
                        <div class="gallery-img-wrap">
                            <img alt="About Us Employee" data-src="https://inbank.com/wp-content/uploads/2022/06/Legacy-headshot-for-About-Us-page-3.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="../wp-content/uploads/2022/06/Legacy-headshot-for-About-Us-page-3.jpg" alt="About Us Employee"></noscript>
                        </div>
                        <div class="gallery-img-wrap">
                            <img alt="Tom" data-src="https://inbank.com/wp-content/uploads/2022/10/Tom-New.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="../wp-content/uploads/2022/10/Tom-New.jpg" alt="Tom"></noscript>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <h1>More Than Just A Business</h1>
                        <div class="content-wrap"><p>We are experienced and dedicated banking professionals who understand the nuances of business. As owners and investors in the bank, our leadership team understands what makes business owners tick and values the economic impact they have on our communities.</p>
                            <p>We recognize that our success is built on your success. Our investment in our bankers, technology, training and personalized services with a sharp focus on execution reflects our commitment to you. We’re In This Together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="verticle-slider grey-bg lg-slider">
            <div class="container-lg">
                <div class="d-flex align-center">
                    <div class="text-on-left">
                        <h2 class="text-white">Relationship banking for</h2>
                    </div>

                    <div class="verticle-slider-wrap">
                        <div class="slider slick-initialized slick-slider slick-vertical">
                            <div aria-live="polite" class="slick-list draggable" style="height: 173px; padding: 50px 0px;"><div class="slick-track" style="opacity: 1; height: 803px; top: -365px;" role="listbox"><p class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 670px;" tabindex="-1">General Contractor</p><p class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 670px;" tabindex="-1">IT Business</p><p class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide00">Local Manufacturer</p><p class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide01">Salon Owner</p><p class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide02">Non-profit Organization</p><p class="slick-slide prev--slide" data-slick-index="3" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide03">Real Estate Developer</p><p class="slick-slide slick-current slick-active slick-center" data-slick-index="4" aria-hidden="false" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide04">Architecture Firm</p><p class="slick-slide next--slide" data-slick-index="5" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide05">General Contractor</p><p class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 670px;" tabindex="-1" role="option" aria-describedby="slick-slide06">IT Business</p><p class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 670px;" tabindex="-1">Local Manufacturer</p><p class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 670px;" tabindex="-1">Salon Owner</p></div></div>


                        </div>
                    </div>
                    <div class="text-on-right">
                        <h2 class="text-white connect-link"><a href="{{ route('contact-us') }}" target="">Connect Today<i class="right-circle-arrow red-bg"></i></a></h2>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
