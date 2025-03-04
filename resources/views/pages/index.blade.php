@extends('pages.layouts.app')
@section('content')


    <main id="primary" class="site-main">
        <section class="home-banner banner-overlay active-home " style="background-image: url(wp-content/uploads/2022/04/background-image.png);background-repeat: no-repeat;background-size: cover;background-position: center;">
            <div class="container">
                <div class="d-flex">
                    <div class="left-banner">
                        <div class="top-links d-flex">
                            <a class="text-white" href="{{ route('business-banking') }}" target="">BUSINESS BANKING</a>
                            <a class="text-white" href="{{ route('personal.banking') }}" target="">PERSONAL BANKING</a>
                        </div>
                        <h1 class="text-white">We’re In This Together</h1>
                        <div class="banner-content text-white"><p>We recognize that our success is built on your success. Our commercial banking team has the expertise to listen, advise and advance your business.</p>
                        </div>
                        <a class="mt-25 d-inblock red-btn" href="contact-us" target="">LET’S TALK</a>
                    </div>
                    <div class="right-banner">
                        <div class="mobile-image">
                            <div class="login-form">
                                <div id="login-form" class="login-form-wrap red-bg">
                                    <p>Login to Your Account</p>
                                    <form id="banking_for" action="{{ route('login') }}" method="post">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="input-wrap">
                                            <label>Account Type</label>
                                            <select name="" class="">
                                                <option name="personal">Personal Banking</option>
                                                <option name="business">Business Banking</option>
                                            </select>
                                        </div>

                                        <div class="input-wrap" id="userId">
                                            <label>User ID:</label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="input-wrap" id="userId">
                                            <label>Password:</label>
                                            <input type="password" name="password" required>
                                        </div>
                                        <div class="input-wrap">
                                            <button type="submit">Login</button>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="input-wrap">
                                                <input type="checkbox" name="remember-me">
                                                <label>Remember Me</label>
                                            </div>
                                            <a href="{{ route('reg_new_account')}}" target="_blank">Create An Account</a>
                                        </div>
                                    </form>
                                </div>                    </div>
                            <img id="animation-image"  alt="Mobile phone" data-src="https://inbank.com/wp-content/uploads/2022/04/App-Mockup-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img id="animation-image" src="wp-content/uploads/2022/04/App-Mockup-2.png" alt="Mobile phone"></noscript>
                            <div class="payment-details">
                                <div class="transfer-wrap align-center d-flex">
                                    <img width="40px" height="40px"  data-src="https://inbank.com/wp-content/uploads/2022/04/Check-Mark-Red.svg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="40px" height="40px" src="wp-content/uploads/2022/04/Check-Mark-Red.svg"></noscript>
                                    <p>Transfer was successful<span>$320.00</span></p>
                                </div>
                                <div class="received-wrap">
                                    <p class="payment-text">Payment Received!</p>
                                    <img width="40px" height="40px"  data-src="https://inbank.com/wp-content/uploads/2022/04/Arrow-Circle-Red.svg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="40px" height="40px" src="wp-content/uploads/2022/04/Arrow-Circle-Red.svg"></noscript>
                                    <p class="amount-text">$320.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="who-we-are-sec">
            <div class="custom-container">
                <div class="d-flex">
                    <div class="who-we-are-wrap" >
                        <div class="who-we-are-inner">
                            <h2 class="">Who We Are</h2>
                            <div class="content-wrap mt-10"><p>Solid Business Banking takes a particular type of financial institution: large enough to underwrite multi-million-dollar loans and experienced enough to understand the challenge of running a small business. Our commercial banking team has the expertise to listen, advise and advance your business. We understand what makes business owners tick.</p>
                            </div>
                            <ul class="tick-list">
                                <li>Relationship Focused</li>
                                <li>Business Minded</li>
                                <li>Committed to Community</li>
                            </ul>
                            <a class="mt-25 d-inblock red-btn" href="who-we-are" target="">ABOUT US</a>
                        </div>
                    </div>
                    <div class="testimonials-wrap d-flex layout1">
                        <div class="testimonials-inner-wrap">


                            <div class="testimonials-carousel">
                                <span class="about-bubble-text">We believe in the art of relationship banking. <br> And our customers agree.</span>
                                <div class="owl-carousel owl-theme">
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity has been much easier to work with and I am receiving personalized service I never could have received with my previous bank. I rarely have to go into the bank anymore because Shirecity customized the amount that I can deposit using my phone or scanner. The lending process was very collaborative and efficient as well. Now we have a banker that knows us, is responsive to us and customizes solutions for my company. Brett and his team’s knowledge have been an incredible asset to keep my company growing and secure. What a difference the right bank can make!”</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Alyssa Carrier</p>
                                                <p class="client-about">Founder + CEO, AC Disaster Consulting</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Like us, Shirecity believes in relationships and they believe in those they serve.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Rocky Khosla</p>
                                                <p class="client-about">MD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity is our bank of choice. Their focus on long-term, meaningful relationships matches our service philosophy. Their “know you by name” culture makes us feel welcome and appreciated.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Dr. Cindy</p>
                                                <p class="client-about">Compton Principle Swallow Charter School </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p> “We work closely with Shirecity as our business partner. Shirecity holds true to the same business principles we trust and believe in. Their assistance and tradition of excellence gives us a superior position in today’s marketplace.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Micheal Thibault</p>
                                                <p class="client-about">T-Bone Construction President</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity locally partnered with us on The Pinery and their attention to detail is what has brought us back time and time again. A successful formula of our values of excellence, service, and hospitality has earned them our banking business and made them an extraordinary collaborator for businesses of every size.”</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Mitchell Yellen</p>
                                                <p class="client-about">Owner Altitude Hospitality</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“We are proud of our growth and recognize that Shirecity has been a key part of our business banking success. Shirecity is a rock solid partner that takes LOCAL banking to a whole new level.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Rhonda Lewis</p>
                                                <p class="client-about">Owner - Rocky Mountain Landscape</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Creating a business banking relationship with Shirecity is one of the best decisions we’ve made. We are their focus and they offer products and services that help businesses like ours become industry leaders.”</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Stephen Kaczmarek</p>
                                                <p class="client-about">CEO - Borealis Fat Bike</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity is our partner because they believe in better as well. Their out-of-the-box banking approach has made our banking experience with them our best banking experience. Their game-changing constant contact and fast decision making have made us a loyal customer.”</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Derek Vidmar</p>
                                                <p class="client-about">Owner Vidmar Motor Company</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity has been instrumental as our banking partner. Their personable nature and easy-to-work with attitude make them our choice in the banking arena.&#8221; </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Susan Spencer</p>
                                                <p class="client-about">Owner Spencer’s Market</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity shares the reputation of being business friendly. They are an easy-to-work with bank and we value the service and personal attention we receive from them.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Ike Drury</p>
                                                <p class="client-about">Drury Brothers Roofing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Choosing local is an intentional lifestyle that we at Eve’s Revolution share with our patrons and our bank. We have been doing business with Shirecity from the very start. At Shirecity they believe that banking is personal; it’s relationship-based, not transaction-based. Shirecity invests in you – in human capital: the thinkers, the creators, the builders that rocket us into future generations.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Eve Carlson</p>
                                                <p class="client-about">Owner of Eve’s Revolution </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity saw our potential and helped us build a community that will change the way Puebloans live. They helped us study our vision and craft an opportunity that Pueblo can be proud of. Not many businesses take such an active role in seeing their customers succeed. That’s the difference our bank makes.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Jim Gilbertson</p>
                                                <p class="client-about">Developer Vista Custom Homes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>“Shirecity has been our bank from the beginning. They offer a friendly bank atmosphere and a can-do attitude. We appreciate their family values and willingness to go the extra mile to have a satisfied customer.” </p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <div>
                                                <p class="client-name">Dennis Zabukovic</p>
                                                <p class="client-about">Owner Zabukovic Motors</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;I can honestly say that switching to Shirecity has been one of the best business decisions we have ever made. We can now pick up the phone and talk to a co-founder of the bank, someone who actually makes decisions and gives good advice.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://Shirecity.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">Martin Faith</p>
                                                <p class="client-about">President, Scottish Group Companies</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Shirecity used technology and handled communication in a way that created a truly seamless and efficient experience. They continue to provide exceptional service and have become a trusted source for banking advice and direction, allowing us to focus on our business to grow and become the best in our industry and marketplace. Thank you so much!&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">James Thompson &#038; Tate Miller</p>
                                                <p class="client-about">Co-Founders, Shade Headwear</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Shirecity&#8217;s commitment to helping small businesses was self-evident in every interaction that we had, and it is one of the many reasons that we will be long-term customers. I cannot recommend Shirecity highly enough.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">RACHEL AVERCH</p>
                                                <p class="client-about">President & CEO, Montessori Children’s House of Denver</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Our partners at Shirecity are absolutely invested in our mission and demonstrate their dedication and compassion everyday! Firefly Autism is so proud to be partners with a bank that truly embodies what non-profits stand for, providing service to our community with compassion and dedication. Thank you Shirecity for your partnership!&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">JESSE OGAS</p>
                                                <p class="client-about">CEO & Executive Director, Firefly Autism</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;The personal service and solutions that we were missing from our former banking relationship we have found in our banking relationship with Shirecity. Shirecity invested time in learning our business and listening to our needs. Then they delivered real solutions to help us run and grow our business. Shirecity has delivered better customer service while charging less in fees and paying higher yields on our savings accounts. The only thing we regret about switching our banking relationship is that we didn’t do it sooner.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">JARRETT SCHWIEN</p>
                                                <p class="client-about">Controller, Yeh and Associates</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Without the line of credit we received from Shirecity, and their support for the Community Advantage loan program, we wouldn&#8217;t be able to help as many small businesses as we do.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">MIKE O’DONNELL</p>
                                                <p class="client-about">CEO, Colorado Lending Source</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Shirecity has been instrumental to the success of our growing company.  Their customized banking solutions, personal touch and customer service helps our business operate efficiently.  Shirecity’s ability and willingness to understand the entrepreneurial approach is unmatched from our perspective.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">BRANDON IDEKER</p>
                                                <p class="client-about">Principal, Indicate Capital and Colorado Short Term Funding</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;Our team has used five different bank treasury management systems and each time we heard how good each bank thought their system was.  Brett told me that the new Shirecity treasury management system was very good.  Well it turns out that I agree! You have a great treasury management platform that absolutely competes with the big banks.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">CHRISTOPHER A. SMITH</p>
                                                <p class="client-about">CEO, PawnBroker Financing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;After a bad experience with another local bank, I re-connected with Brett at Shirecity and within a day he got the approvals I needed for the loan. It was not a cumbersome process and everything was done here in one place.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">RICH WARYN</p>
                                                <p class="client-about">CEO, LDK Logistics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text"><p>&#8220;We wanted to get away from the large banks that lack the personalized touch, which is key for a company of our size.&#8221;</p>
                                        </div>
                                        <div class="testimonial-about d-flex align-center">
                                            <img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20"   alt="Footer icons" decoding="async" loading="lazy" data-src="https://inbank.com/wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="60" height="20" src="wp-content/uploads/2022/04/footer-icons-1.svg" class="attachment-60x60 size-60x60 wp-post-image" alt="Footer icons" decoding="async" loading="lazy" /></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript></noscript>                                            <div>
                                                <p class="client-name">SEAN HOGAN</p>
                                                <p class="client-about">CEO & CFO, Alpha USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section id="services-sec" class="services-sections ">
            <div class="custom-container" style="margin-left: 23px;">
                <div class="services-sec-wrap d-flex">
                    <div class="services-left navy-bg">
                        <h2>Services</h2>
                        <div class="service-left-content"><p>We’ll tailor our services to your needs and partner with you for long-term success — whether you’re just starting out and need the basics or you’re ready to expand and give your competition a run for their money.</p>
                        </div>
                    </div>
                    <div class="services-right grey-bg">
                        <div class="services-slider">
                            <div class="owl-carousel owl-theme owl-loaded owl-drag">




                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-939px, 0px, 0px); transition: all 0s ease 0s; width: 2820px;"><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="bankers handshake" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" data-src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="bankers handshake" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Concierge Experience</h4>
                                                        <div class="service-excerpt">
                                                            <p>We know that switching banks is a pain point for most businesses. That’s why we created the Shirecity Business Concierge Team. </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="business credit card" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" data-src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/credit-card-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="business credit card" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Credit Cards</h4>
                                                        <div class="service-excerpt">
                                                            <p>The InBusiness Credit Card makes it easy to manage your expenses and keep tabs on spending so you can focus on your business.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="Online Business Checking Account" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" data-src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Online Business Checking Account" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Checking</h4>
                                                        <div class="service-excerpt">
                                                            <p>We offer checking options for all business sizes as well as non-profit organizations and public entities for all transaction volumes.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item active" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="bankers handshake" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" data-src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="bankers handshake" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Concierge Experience</h4>
                                                        <div class="service-excerpt">
                                                            <p>We know that switching banks is a pain point for most businesses. That’s why we created the Shirecity Business Concierge Team. </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item active" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="business credit card" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" data-src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/credit-card-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="business credit card" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Credit Cards</h4>
                                                        <div class="service-excerpt">
                                                            <p>The InBusiness Credit Card makes it easy to manage your expenses and keep tabs on spending so you can focus on your business.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item active" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="Online Business Checking Account" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" data-src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Online Business Checking Account" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Checking</h4>
                                                        <div class="service-excerpt">
                                                            <p>We offer checking options for all business sizes as well as non-profit organizations and public entities for all transaction volumes.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="bankers handshake" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" data-src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/06/intro-thankyou-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="bankers handshake" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-1024x683.jpg 1024w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou-768x512.jpg 768w, https://inbank.com/wp-content/uploads/2022/06/intro-thankyou.jpg 1440w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Concierge Experience</h4>
                                                        <div class="service-excerpt">
                                                            <p>We know that switching banks is a pain point for most businesses. That’s why we created the Shirecity Business Concierge Team. </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="business credit card" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" data-src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/credit-card-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="business credit card" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/credit-card-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/credit-card.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Credit Cards</h4>
                                                        <div class="service-excerpt">
                                                            <p>The InBusiness Credit Card makes it easy to manage your expenses and keep tabs on spending so you can focus on your business.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div><div class="owl-item cloned" style="width: 313.333px;"><div class="service-wrap ">
                                                <a >
                                                    <img width="300" height="200" alt="Online Business Checking Account" decoding="async" loading="lazy" data-srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" data-src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium wp-post-image lazyloaded" src="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" sizes="(max-width: 300px) 100vw, 300px" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w"><noscript><img width="300" height="200" src="../wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Online Business Checking Account" decoding="async" loading="lazy" srcset="https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa-300x200.jpg 300w, https://inbank.com/wp-content/uploads/2022/04/two-business-men-using-their-smart-phones-no-faces-wearing-suits-carrying-leather-briefcase-satchels_t20_g8EVoa.jpg 749w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>                                        <div class="services-post-content">
                                                        <h4>Business Checking</h4>
                                                        <div class="service-excerpt">
                                                            <p>We offer checking options for all business sizes as well as non-profit organizations and public entities for all transaction volumes.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="left-circle-arrow navy-bg"></i></button><button type="button" role="presentation" class="owl-next"><i class="right-circle-arrow navy-bg"></i></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="content-image-sec white-gradient" style="background-image: url(front/wp-content/uploads/2022/04/New-Project-2022-04-27T164625.006-1.png);">
            <div class="container">
                <div class="d-flex align-center">
                    <div class="left-content">
                        <h2 class="">Running a business is challenging – the relationship with your bank shouldn’t be.</h2>
                        <div class="content-wrap mt-10"><p>We know that switching banks is a pain point for most businesses.</p>
                            <p>That’s why we created the Shirecity Business Concierge Experience. We specialize in easing the transition of moving business operating accounts and services to Shirecity. As a community bank our team will be with you every step of the way.</p>
                        </div>
                    </div>
                    <div class="right-image">
                        <img  alt="Colorado Banker" data-src="https://inbank.com/wp-content/uploads/2022/10/Woman-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="wp-content/uploads/2022/10/Woman-2.png" alt="Colorado Banker"></noscript>
                    </div>
                </div>
            </div>
        </section>
        <section class="verticle-slider grey-bg ">
            <div class="custom-container">
                <div class="d-flex align-center">
                    <div class="text-on-left">
                        <h2 class="text-white">Relationship banking with</h2>
                    </div>

                    <div class="verticle-slider-wrap">
                        <div class="slider">
                            <p>Molly</p>
                            <p>Tom</p>
                            <p>Adrianne</p>
                            <p>Brett</p>
                            <p>Art</p>
                            <p>Steve</p>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
