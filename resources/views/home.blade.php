<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aldar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/fonts/fonts.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/responsive.css">
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-JCEXFY9TSY"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-JCEXFY9TSY'); </script>
</head>

<body>
    <header>
        <div class="main-header">
            <div class="container-fluid">
                <!-- <h6 class="lang">العربية</h6> -->
                <div class="custom-nav">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="logo">
                                <a href="#">Go to Aldar.com <span class="fa-solid fa-arrow-right-long ms-3"></span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <a href="{{ route('register') }}" class="register-btn">
                                <span>Register your interest</span>
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main-slider">
        <div class="slider-carousel owl-carousel owl-theme">
            <div class="slide-item bg-image-top py-80" style="background-image: url({{URL::to('/')}}/assets/images/banner/slider-1.jpg);">
                <div class="container">
                    <div class="banner-content-box">
                        <!-- <h1 class="banner-title">Verdes</h1>
                        <h5>By Haven</h5> -->
                        <img src="{{URL::to('/')}}/assets/images/logo.png" class="img-fluid mx-auto" width="300" alt="Logo">
                    </div>
                </div>
            </div>
            <div class="slide-item bg-image-top py-80" style="background-image: url({{URL::to('/')}}/assets/images/banner/slider-2.jpg);">
                <div class="container">
                    <div class="banner-content-box">
                        <img src="{{URL::to('/')}}/assets/images/logo.png" class="img-fluid mx-auto" width="300" alt="Logo">
                    </div>
                </div>
            </div>
            <div class="slide-item bg-image-top py-80" style="background-image: url({{URL::to('/')}}/assets/images/banner/slider-3.jpg);">
                <div class="container">
                    <div class="banner-content-box">
                        <img src="{{URL::to('/')}}/assets/images/logo.png" class="img-fluid mx-auto" width="300" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-company-section bg-image-center py-80" style="background-image: url({{URL::to('/')}}/assets/images/bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-9 col-xxl-8">
                    <div class="section-title text-center">
                        <h3 class="main-title text-white"><span>Introducing</span> <br />
                            Apartment living in Dubai’s first wellness-inspired community</h3>
                    </div>
                    <div class="content">
                        <p>After the record-breaking sales of Haven, Aldar proudly presents the final chance to own a home in Haven’s final phase—only 25 minutes from Downtown Dubai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discover-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="intro-carousel owl-carousel owl-theme">
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/background/banner-1.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/background/banner-2.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/background/banner-3.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/background/banner-4.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/background/banner-5.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                    </div>
                    <div class="discover-container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-7">
                                <div class="section-title">
                                    <h3 class="main-title text-lg"><span>Discover</span> Wellness Living</h3>
                                </div>
                                <p class="short-content">
                                    Wellness living is now within reach. Make your home in a place where every moment has been curated to enhance your wellbeing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-section">
        <div class="explore-background">
            <img src="{{URL::to('/')}}/assets/images/explore-bg.png" class="img-fluid" alt="Explore">
            <div class="section-title">
                        <h3 class="main-title text-white"><span>Explore</span> Verdes by Haven</h3>
                    </div>
        </div>
        <div class="overlay-bg">
            <img src="{{URL::to('/')}}/assets/images/bg-3.png" class="img-fluid overlay" alt="Img">
            <!--<div class="overlay-content">-->
            <!--    <a href="#">-->
            <!--        <img src="{{URL::to('/')}}/assets/images/360-video.svg" class="img-fluid rotate" width="60" alt="360">-->
            <!--        <p class="mt-4">Take a virtual walk</p>-->
            <!--    </a>-->
            <!--</div>-->
        </div>
    </section>
    <section class="specification-section py-80 pb-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-7">
                    <div class="section-title">
                        <h3 class="main-title"><span>The</span> treehouse</h3>
                    </div>
                    <p class="short-content">
                        The first thing that’ll catch your eye as you enter the community is an iconic treehouse. Integrated and built around a beautiful tree, it features a spacious, multi-levelled community lounge. Perfect for productive mornings in the coworking lounge or laid-back afternoons with family and friends.
                    </p>
                </div>
            </div>
        </div>
        <div class="specification-tab bg-image-center" style="background-image: url({{URL::to('/')}}/assets/images/bg-2.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#amenities" type="button" role="tab" aria-selected="true">Amenities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab" aria-selected="false">Services</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#sustainability" type="button" role="tab" aria-selected="false">Sustainability</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#community" type="button" role="tab" aria-selected="false"><span class="d-none d-sm-inline-flex d-md-none d-lg-inline-flex"> Smart</span> Community</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="amenities" role="tabpanel" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-8 col-xl-6 col-xxl-6">
                                <!-- <div class="tab-heading">
                                    <h6>Enjoy a host of amenities from a sparkling infinity pool to lush coworking spaces to state-of-the-art gyms.</h6>
                                </div> -->
                                <div class="section-title text-center">
                                    <h3 class="main-title text-white"><span>The</span> Amenities</h3>
                                </div>
                                <p class="short-content text-white text-center">
                                    Enjoy a host of amenities from a sparkling infinity pool to lush coworking spaces to state-of-the-art gyms.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                <div class="detail">
                                    <div class="row g-5 justify-content-center">
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <ul>
                                                <li>Coworking spaces</li>
                                                <li>Community centre</li>
                                                <li>24/7 Gym</li>
                                                <li>Swimming pool</li>
                                                <li>Kids’ pool</li>
                                                <li>Spin room</li>
                                                <li>Central park</li>
                                                <li>Water streams</li>
                                                <li>Outdoor fitness areas</li>
                                                <li>Mosque</li>
                                                <li>Jogging & cycling tracks</li>
                                                <li>Yoga pavilions</li>
                                                <li>Meditation pavilions</li>
                                                <li>Primary school</li>
                                                <li>Kindergarten</li>
                                                <li>Nursery</li>
                                                <li>Multi-purpose room</li>
                                                <li>Shaded play areas</li>
                                                <li>Multi-sports court</li>
                                                <li>Treehouse café</li>
                                                <li>Adjacent amenities</li>
                                                <li>Clinic</li>
                                                <li>Retail centre</li>
                                                <li>Habtoor polo club</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="preview-slider">
                                                <div class="image-slider owl-carousel owl-theme">
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/amenities/img-1.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/amenities/img-2.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/amenities/img-3.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/amenities/img-4.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/amenities/img-5.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="services" role="tabpanel" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-8 col-xl-6 col-xxl-6">
                                <div class="section-title text-center">
                                    <h3 class="main-title text-white"><span>Wellness-inspired </span> services</h3>
                                </div>
                                <p class="short-content text-white text-center">
                                    Enjoy community-wide wellness with services that will bring you closer to serenity.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                <div class="detail">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <ul>
                                                <li>Spa room facilities</li>
                                                <li>Free Yoga & Pilates</li>
                                                <li>Cooking classes</li>
                                                <li>Home maintenance</li>
                                                <li>24/7 Housekeeping</li>
                                                <li>Lifestyle concierge</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="preview-slider">
                                                <div class="image-slider owl-carousel owl-theme">
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/services/img-1.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/services/img-2.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/services/img-3.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sustainability" role="tabpanel" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-8 col-xl-6 col-xxl-6">
                                <div class="section-title text-center">
                                    <h3 class="main-title text-white"><span>Sustainable </span> homes</h3>
                                </div>
                                <p class="short-content text-white text-center">
                                    Verdes by Haven looks after the wellbeing of the environment too. Carefully considered sustainability measures will help to reduce your utility bills, and contribute towards a greener, earth-friendly living experience.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                <div class="detail">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <ul>
                                                <li>Human-centric community design</li>
                                                <li>Energy and water efficiency</li>
                                                <li>Optimised HVAC system</li>
                                                <li>Natural lighting</li>
                                                <li>Generous green spaces</li>
                                                <li>Native landscaping</li>
                                                <li>Easy accessibility to services</li>
                                                <li>Public transport</li>
                                                <li>Shaded walkways & bikeways</li>
                                                <li>EV charging facilities</li>
                                                <li>Enhanced air quality</li>
                                                <li>Photovoltaic systems</li>
                                                <li>Water conservation</li>
                                                <li>Smart waste systems</li>
                                                <li>Local materials</li>
                                                <li>Sustainable construction</li>
                                                <li>3-star WELL certification</li>
                                                <li>Gold LEED certification</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="preview-slider">
                                                <div class="image-slider owl-carousel owl-theme">
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/sustainability/img-1.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/sustainability/img-2.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/sustainability/img-3.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="community" role="tabpanel" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-8 col-xl-6 col-xxl-6">
                                <div class="section-title text-center">
                                    <h3 class="main-title text-white"><span>A smart </span> community</h3>
                                </div>
                                <p class="short-content text-white text-center">
                                    Immerse yourself in a cutting-edge community where advanced technology and innovative systems are seamlessly integrated to prioritise your wellness.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                <div class="detail">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <ul>
                                                <li>Smart irrigation</li>
                                                <li>Environmental monitoring for sports</li>
                                                <li>Air quality monitoring</li>
                                                <li>Noise monitoring</li>
                                                <li>Sound masking</li>
                                                <li>Digital amenities booking</li>
                                                <li>Community access control</li>
                                                <li>Integrated safety</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="preview-slider">
                                                <div class="image-slider owl-carousel owl-theme">
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/community/img-1.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/community/img-2.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{URL::to('/')}}/assets/images/community/img-3.jpg" class="img-fluid" alt="Img">
                                                    </div>
                                                </div>
                                            </div>
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
    <section class="details-section py-80 pb-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-7">
                    <div class="section-title mb-5">
                        <h3 class="main-title"><span>Details and </span> finishes</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="footer-carousel owl-carousel owl-theme">
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/overview/overview-1.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/overview/overview-2.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/overview/overview-3.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                        <div class="slide-item">
                            <img src="{{URL::to('/')}}/assets/images/overview/overview-4.jpg" class="img-fluid" alt="Intro Banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section bg-image-center" style="background-image: url({{URL::to('/')}}/assets/images/footer-bg.jpg);">
        <div class="container">
            <div class="copyright">
               <a href="{{URL::to('/')}}"> <h3>800 ALDAR | ALDAR.COM</h3></a>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/assets/js/script.js"></script>
</body>

</html>