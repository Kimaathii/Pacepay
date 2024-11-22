@extends('welcome')
@section('content')
<main>
    <!-- Banner Start -->
    <section class="banner bg-cover-center v7 ml-120 mr-120 ml-xl-0 mr-xl-0 ml-xl-0 mr-xl-0"
        data-background="{{ asset('assets/img/newImages/bg2pacePay.jpg') }}">
        <div class="container">
            <div class="banner-content">
                <div class="section-title v8">
                    <h2 class="big-title font-v3">Pacepay<img src="assets/img/banner/v7/Icon-shap.svg"
                            alt="banner-home"> <br> Revolutionizing Digital Finance for Underserved MSMEs                            
                    </h2>
                    {{-- <p class="title-para">Our mortgage services are designed to provide you with the financial
                        <br> solutions you need to turn your dreams into reality.
                    </p> --}}
                </div>
                <form action="#" class="email-container">
                    <input type="email" placeholder="Enter your email" class="email-input">
                    <button class="btn-anime v23 round-border-sm icon-5">Request</button>
                </form>
                {{-- <p class="contact-para">Deferent Thinking?? <a href="#">Contact Us</a></p> --}}
            </div>
        </div>
    </section>
    <!-- Banner End -->
       <!-- Refine Financial Start -->
       <section class="refine-financial v1 pt-264 pb-140 pt-md-70 pb-md-70 pt-lg-100 pb-xl-100">
        <div class="container">
            <div class="section-title-center v4">
                <h2 class="big-title">
                    {{-- <span class="bg-text-color"
                data-background="assets/img/bg-shap/text-shap/shap-2.svg">Planning</span> --}}
                    <br>The Pacepay Vision: Empowering MSMEs Through Digital Finance
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.1s"
                    data-wow-duration="0.8s">
                    <div class="refineFinancial-card">
                        <div class="financial-icon v1">
                            <i class="my-icon icon-coin "></i>
                        </div>
                        <div class="card-contant">
                            <h2 class="card-title font-v1">Trustworthy<br>Financial Services</h2>
                            <p class="card-para">Pacepay aims to build trust in digital finance by leveraging
                                blockchain technology and transparent processes, ensuring secure
                                and reliable transactions for all users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.3s"
                    data-wow-duration="0.8s">
                    <div class="refineFinancial-card">
                        <div class="financial-icon v2">
                            <i class="my-icon icon-security-card"></i>
                        </div>
                        <div class="card-contant">
                            <h2 class="card-title font-v1">Accessibility<br>for the Underserved</h2>
                            <p class="card-para">Our platform extends financial services to previously excluded
                                communities, bringing digital finance to the doorstep of rural and
                                urban MSMEs alike.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.1s"
                    data-wow-duration="0.8s">
                    <div class="refineFinancial-card">
                        <div class="financial-icon v3">
                            <i class="my-icon icon-chart-square"></i>
                        </div>
                        <div class="card-contant">
                            <h2 class="card-title font-v1">Affordability<br>
                                and Inclusion</h2>
                            <p class="card-para">By offering competitive rates and flexible financial products,
                                Pacepay makes digital finance accessible to businesses of all sizes,
                                promoting financial inclusion across Nigeria.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.3s"
                    data-wow-duration="0.8s">
                    <div class="refineFinancial-card">
                        <div class="financial-icon v4">
                            <i class="my-icon icon-pencil-c"></i>
                        </div>
                        <div class="card-contant">
                            <h2 class="card-title font-v1">Ubiquitous<br>
                                Financial Solutions</h2>
                            <p class="card-para">Through our innovative Pace Points and mobile platform, we
                                ensure that financial services are available anytime, anywhere,
                                even in the most remote areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="bg-img-top">
            <img alt="bg-img" src="assets/img/refine-financial/bg-img-top.png">
        </div> --}}
        <div class="bg-img-bottom">
            <img alt="bg-img" src="assets/img/refine-financial/bg-img-bottom.png">
        </div>
        <div class="bg-img-right">
            <img alt="bg-img" src="assets/img/refine-financial/bg-img-right.png">
        </div>
    </section>
    <!-- Refine Financial End -->
    <!-- Partners Logo Start -->
    <section
        class="partners-logo v2 ml-120 mr-120 ml-xl-0 mr-xl-0 ml-xl-0 mr-xl-0 pt-120 pb-120 pt-sm-50 pb-sm-50 pt-md-70 pb-md-70 pt-lg-100 pb-lg-100 pt-xl-100 pb-xl-100">
        <div class="container">
            <div class="slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"><img src="assets/img/official-partners/v2/routific.svg" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="assets/img/official-partners/v2/metLife.svg" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="assets/img/official-partners/v2/funding-circle.svg"
                                alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="assets/img/official-partners/v2/roofr.svg" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="assets/img/official-partners/v2/xentral.svg" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners Logo End -->
    <!-- Our Services Start -->
    <section
        class="our-services bg-cover-center v3 ml-120 mr-120 ml-xl-0 mr-xl-0 pt-sm-50 pb-sm-50 pt-130 pb-130 pt-md-70 pb-md-70 pt-lg-100 pb-lg-100"
        data-background="assets/img/our-services/v3/services-bg.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6">
                    <div class="service-content-right">
                        <div class="section-title v8">
                            <h3 class="big-title font-v3">Innovative Lending Solutions for MSMEs                                
                                {{-- <img src="assets/img/banner/v7/Icon-shap.svg" alt="banner-home"> --}}
                            </h3>
                            {{-- <p class="title-para">our mortgage services include a variety of features to help
                                <br> you make
                                informed decsions and achive your goals
                            </p>
                            <p class="title-para">our mortgage services include a variety of features to help
                                <br> you make
                                informed decsions and achive your goals
                            </p> --}}
                        </div>
                        <ul class="all-btns">
                            <li>
                                <a href="#" class="link-anime v23 round-border-sm">Learn More </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="service-cards">
                        <li class="wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.1s"
                            data-wow-duration="0.8s">
                            <i class="my-icon v1 icon-massage"></i>
                            <h5 class="service-card-title">Supply Chain Finance</h5>
                            <p class="title-pera">Pacepay offers tailored financing solutions that optimize working
                                capital for businesses throughout the supply chain, from suppliers to
                                distributors.</p>
                            {{-- <a href="#" class="read-more v6">Learn More</a> --}}
                        </li>
                        <li class="wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.3s"
                            data-wow-duration="0.8s">
                            <i class="my-icon v2 icon-massage"></i>
                            <h5 class="service-card-title">Purchase Order Finance</h5>
                            <p class="title-pera">We provide short-term financing to help businesses fulfill customer
                                orders, bridging the gap between order placement and payment
                                receipt.</p>
                            {{-- <a href="#" class="read-more v6">Learn More</a> --}}
                        </li>
                        <li class="wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.5s"
                            data-wow-duration="0.8s">
                            <i class="my-icon v3 icon-massage"></i>
                            <h5 class="service-card-title">Contract Finance</h5>
                            <p class="title-pera">Pacepay supports businesses by financing the execution of contracts,
                                enabling them to take on larger projects and grow their operations.</p>
                            {{-- <a href="#" class="read-more v6">Learn More</a> --}}
                        </li>
                        <li class="wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.5s"
                            data-wow-duration="0.8s">
                            <i class="my-icon v3 icon-massage"></i>
                            <h5 class="service-card-title">Invoice Discounting</h5>
                            <p class="title-pera">Our platform allows businesses to convert outstanding invoices into
                                immediate cash, improving cash flow and reducing payment wait times.</p>
                            {{-- <a href="#" class="read-more v6">Learn More</a> --}}
                        </li>  
                    </ul>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Our Services End -->
    <!-- Video Box Start -->
    <div class="video-box v3 ml-120 mr-120 ml-xl-0 mr-xl-0 pt-sm-50 pt-130 pt-md-70 pt-lg-100">
        <div class="video-card-box">
            <button class="play-btn v5 venobox" data-vbtype="video" data-maxwidth="800px" data-autoplay="true"
                data-href="https://youtu.be/itIpz_Vn3hU?si=ZAJVdN7irElA62Bu&amp;t=5"><i
                    class="my-icon icon-play-t"></i></img></button>
            <img src="assets/img/financial-technology/play-bg.jpg" alt="video-code">
        </div>
    </div>
    <!-- Video Box End -->
    <!-- Process List Start -->
    <section
        class="process-list v1 bg-cover-center ml-120 mr-120 mt-115 ml-xl-0 mr-xl-0 mt-xl-50 pt-sm-50 pb-sm-50 pt-130 pb-130 pt-md-70 pb-md-70 pt-lg-100 pb-lg-100 mt-xl-120"
        data-background="assets/img/process/process-bg.png">
        <div class="container">
            <div class="section-title v8">
                <h2 class="big-title font-v3">Pacepay's Unique Market Position</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.1s"
                    data-wow-duration="0.8s">
                    <div class="process-card">
                        <i class="my-icon icon-massage"></i>
                        <h5 class="process-card-title">Mobile Money Loan Points</h5>
                        <p class="process-title-pera">
                            Pacepay introduces the first-ever
                            mobile money loan points across
                            Nigeria, branded as Pace Points.
                            These allow walk-in customers to
                            collect loans directly through our
                            DLT-powered escrow finance
                            platform, revolutionizing access to
                            credit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.3s"
                    data-wow-duration="0.8s">
                    <div class="process-card">
                        <i class="my-icon icon-massage"></i>
                        <h5 class="process-card-title">Rapid Agent Onboarding</h5>
                        <p class="process-title-pera">
                            Our streamlined process for
                            onboarding mobile money agents
                            as businesses onto our platform
                            enables quick adoption of digital
                            financial services, expanding our
                            reach and impact.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.5s"
                    data-wow-duration="0.8s">
                    <div class="process-card">
                        <i class="my-icon icon-massage"></i>
                        <h5 class="process-card-title">Value Chain Nexus</h5>
                        <p class="process-title-pera">
                            Pacepay's platform serves as a
                            central hub for value chain
                            businesses in agriculture and
                            FMCG, facilitating seamless
                            transactions between processors,
                            suppliers, and logistics providers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process List End -->
    <!-- Eligbility TART -->
    <section
        class="eligbility bg-cover-center ml-120 mr-120 mt-115 ml-xl-0 mr-xl-0 mt-xl-50 pt-sm-50 pb-sm-50 pt-130 pb-130 pt-md-70 pb-md-70 pt-lg-100 pb-lg-100 mt-xl-120"
        data-background="assets/img/eligibility-check/eligibility-check-bg.jpg">
        <div class="container">
            <div class="section-title v8">
                <h2 class="big-title font-v3">Eligibility Check</h2>
            </div>
            <ul class="check-mark-list v2">
                <li>
                    <i class="my-icon icon-check"></i>
                    <h4 class="text">Minimum Ccredit Score Of 620</h4>
                </li>
                <li>
                    <i class="my-icon icon-check"></i>
                    <h4 class="text">stable income and employment history</h4>
                </li>
                <li>
                    <i class="my-icon icon-check"></i>
                    <h4 class="text">3% down payment</h4>
                </li>
                <li>
                    <i class="my-icon icon-check"></i>
                    <h4 class="text">a property that meets our guidelines</h4>
                </li>
            </ul>
            <p class="title-para">we understand that everyone's financial situation is deffernt. which is
                <br> why we offer a range of flexible mortgage terms to fit your needs.
            </p>
        </div>
    </section>
    <!-- Eligbilit End -->
    <!-- Client Testimonial Start -->
    <section
        class="client-testimonial v4 ml-120 mr-120 mt-115 ml-xl-0 mr-xl-0 mt-xl-50 pb-sm-50 pb-130 pb-md-70 pb-lg-100 mt-xl-120">
        <div class="container">
            <div class="section-title v8">
                <div class="title-left-right-end">
                    <div class="w-80-15">
                        <h2 class="big-title font-v3">The Team Behind Pacepay's Success</h2>
                        {{-- <p class="title-para">We understand that everyone’s financial situation is different,
                            which is <br> why we offer a range of flexible mortgage terms to fit your needs.</p> --}}
                    </div>
                    <ul class="all-btns">
                        {{-- <li>
                            <a href="#" class="link-anime v23 round-border-full">Learn More </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.1s"
                    data-wow-duration="0.8s">
                    <div class="client-card v1">
                        <div class="card-icon">
                            <i class="my-icon icon-quotes-2"></i>
                        </div>
                        <p class="title-para">"With over 20 years in the finance industry, Adeniyi brings a
                            wealth of experience from his instrumental role in Opay's
                            rise to unicorn status. His expertise in mobile money
                            aggregation and deep understanding of the Nigerian
                            market drives Pacepay's strategic vision.</p>
                        <div class="card-footer">
                            <h5 class="name">Adeniyi Omoniyi - Founder</h5>
                            <ul class="star-mark star-5">
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.3s"
                    data-wow-duration="0.8s">
                    <div class="client-card v2">
                        <div class="card-icon">
                            <i class="my-icon icon-quotes-2"></i>
                        </div>
                        <p class="title-para">"As our CTO, Rotimi leads the development of Pacepay's
                            cutting-edge technology platform, ensuring robust,
                            scalable, and secure solutions for our users.</p>
                        <div class="card-footer">
                            <h5 class="name">Rotimi - Chief Technology Officer</h5>
                            <ul class="star-mark star-5">
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow animate__fadeInUp" data-wow-offset="100" data-wow-delay="0.5s"
                    data-wow-duration="0.8s">
                    <div class="client-card v3">
                        <div class="card-icon">
                            <i class="my-icon icon-quotes-2"></i>
                        </div>
                        <p class="title-para">"Our diverse leadership team combines expertise in fintech,
                            agriculture, FMCG, and rural development to guide
                            Pacepay's growth and impact.</p>
                        <div class="card-footer">
                            <h5 class="name">Experienced Leadership Team</h5>
                            <ul class="star-mark star-5">
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                                <li><i class="my-icon icon-star-solid"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonial End -->
</main>

@endsection