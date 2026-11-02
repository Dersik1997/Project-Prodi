<!doctype html>
<html class="no-js " lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stadum - University Education HTML Template - Campus Life</title>
    <meta name="author" content="Stadum">
    <meta name="description" content="Stadum - University Education HTML Template">
    <meta name="keywords" content="Stadum - University Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo-ummi.png') }}" alt="Universitas Muhammadiyah Sukabumi">
            <span class="loader">
                Universitas Muhammadiyah Sukabumi
                <span class="loading-text">Universitas Muhammadiyah Sukabumi</span>
            </span>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('home.university') }}">
                            <img src="{{ asset('assets/img/logo2.svg') }}" alt="Stadum">
                        </a>
                    </div>
                    <p class="about-text">Since 1999, when the newly minted Stadum team embraced its mandate to breathe new life into the downtrodden neighbourhood, East Village’s transformation has been nothing short of remarkable. </p>
                    <div class="footer-info">
                        <a href="#">
                            <span class="footer-info-icon"><i class="fa-solid fa-location-dot"></i></span> 45 New Eskaton Road, Austria
                        </a>
                        <a href="mailto:infomail@example.com">
                            <span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span> infomail@example.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a class="text-inherit" href="{{ route('blog.details') }}">Trailblazers in Faculty Perspectives</a>
                            </h4>
                            <div class="recent-post-meta">
                                <a href="{{ route('blog.index') }}"><i class="far fa-calendar"></i>26/6/2025</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-2.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details') }}">Future Focus Preparing for Tomorrow</a></h4>
                            <div class="recent-post-meta">
                                <a href="{{ route('blog.index') }}"><i class="far fa-calendar"></i>24/6/2025</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="{{ route('blog.details') }}"><img src="{{ asset('assets/img/blog/recent-post-1-3.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a class="text-inherit" href="{{ route('blog.details') }}">The Green Initiative Sustainability in Action</a>
                            </h4>
                            <div class="recent-post-meta">
                                <a href="{{ route('blog.index') }}"><i class="far fa-calendar"></i>24/6/2025</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Popular Tags</h3>
                <div class="th-social">
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="far fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    @include('partials.navbar') <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper position-relative " data-bg-src="{{ asset('assets/img/shape/breadcrumb-shep.png') }}">
        <div class="breadcumb-banner">
            <img src="{{ asset('assets/img/breadcrumb/breadcumb-banner.png') }}" alt="bg-banner">
        </div>
        <div class="breadcumb-shape">
            <img src="{{ asset('assets/img/shape/triangle-light.png') }}" alt="shape" class="jump">
        </div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Campus Life</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home.university') }}">Home</a></li>
                            <li>Campus Life</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="campus space overflow-hidden">
        <div class="container th-container4">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-4">
                    <div class="title-area text-center text-lg-start">
                        <h2 class="sec-title text-anim2">You can live student life to its fullest!</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="wow fadeInUp">Just because you’re taking a full course schedule, studying during work breaks, and let’s not forget
                        trying to figure out what you want to do professionally for the rest of your working years, you can
                        still have a life!</p>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="campus-image global-img">
                    <img src="{{ asset('assets/img/campus/campus-image.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section><!--==============================
Cta Area  
==============================-->
    <section class="cta-area-2 bg-title pt-5 pb-5 overflow-hidden" id="contact-sec">
        <div class="container th-container4">
            <div class="row gy-5 justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="title-area mb-0 ps-xl-5">
                        <h2 class="sec-title text-white">Not yet enrolled in university? Become one now and fully enjoy your
                            time as a student.</h2>
                    </div>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a href="{{ route('contact') }}" class="th-btn th-icon white-hover">Apply Today</a>
                </div>
            </div>
        </div>
    </section>
    <div class="campus space overflow-hidden overflow-hidden">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-anim2">Find Your Success as a Student at Stadum University</h2>
                        <p class="wow fadeInUp">Make the most of your time as a student here at Friends University! Below
                            are some ways you can get involved and be part of our wonderful community.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 space-bottom  justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-6 campus-item_wrapp">
                    <div class="campus-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/campus/campus-3-1.jpg') }}" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Student Affairs</h3>
                            <p class="box-text">The data is in students who live on campus have a 74 percent higher chance
                                of graduating than those who live off campus. If that were a lottery odd, we’d be playing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 campus-item_wrapp">
                    <div class="campus-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/campus/campus-3-2.jpg') }}" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Student Auditorium</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 campus-item_wrapp">
                    <div class="campus-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/campus/campus-3-3.jpg') }}" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Grup Study & Diversity</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-50">
                <h2 class="">Our campus is stunning from Davis to Casado!, we have a beautiful campus! the Stadum University
                    campus is
                    teaming with fun activities, fantastic facilities and helpful resources. And you can have access to all
                    of it.</h2>
            </div>
            <div class="row gy-4 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="campus-box-img1 global-img">
                        <img src="{{ asset('assets/img/campus/campus-img1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="campus-box-img2 global-img">
                        <img src="{{ asset('assets/img/campus/campus-img2.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="overflow-hidden">
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-anim2">Arts & Culture</h2>
                        <p class="wow fadeInUp">From the playing fields, to hallowed Davis Hall, to the Stadum Campus
                            Center, the Stadum University campus is teaming with fun activities, fantastic facilities and
                            helpful resources. And you can have access to all of it.</p>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider campusSlider1 has-shadow" id="campusSlider1" data-slider-options='{"paginationType": "progressbar","mousewheel": {"enabled": true,"sensitivity": 4},"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"3"},"1400":{"centeredSlides":"true","slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-1.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Wellness & Therapy</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Wellness & Therapy</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-2.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Museums</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Museums</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-3.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Athlete</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Athlete</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-4.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Performing Arts</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Performing Arts</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-1.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Wellness & Therapy</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Wellness & Therapy</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card2" data-bg-src="{{ asset('assets/img/campus/campus-4-2.jpg') }}">
                                <div class="box-content2">
                                    <h3 class="box-title">Museums</h3>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Museums</h3>
                                    <p class="box-text"> Athletics provides intercollegiate and recreational opportunities
                                        that enrich the Penn student experience, and makes athletic facilities and
                                        activities available to the entire campus community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Marquee Area  
==============================-->
    <div class="marquee-area space  overflow-hidden">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":40}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">CREATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/scollarship.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">DISCOVER</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">INNOVATE</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">EDUCATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/scollarship.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">CASE STUDIES</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">CREATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">DISCOVER</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <img src="{{ asset('assets/img/icon/scollarship.svg') }}" alt="icon">
                            </div>
                            <a target="_blank" href="#">INNOVATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout3" data-bg-src="{{ asset('assets/img/bg/footer-bg-2.png') }}">
        <div class="container th-container4">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('home.university') }}">
                                        <img src="{{ asset('assets/img/logo2.svg') }}" alt="Stadum">
                                    </a>
                                </div>
                                <p class="about-text">Since 1999, when the newly minted Stadum team embraced its mandate to breathe new life into the downtrodden neighbourhood, East Village’s transformation has been nothing short of remarkable. </p>
                                <div class="footer-info">
                                    <a href="#">
                                        <span class="footer-info-icon"><i class="fa-solid fa-location-dot"></i></span> 45 New Eskaton Road, Austria
                                    </a>
                                    <a href="mailto:infomail@example.com">
                                        <span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span> infomail@example.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Useful Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('home') }}">Students</a></li>
                                    <li><a href="{{ route('about') }}">Admission</a></li>
                                    <li><a href="{{ route('pricing') }}">Faculty & Stuffs</a></li>
                                    <li><a href="#">Media Relations</a></li>
                                    <li><a href="{{ route('about') }}">Alumni</a></li>
                                    <li><a href="{{ route('about') }}">All Awards</a></li>
                                    <li><a href="{{ route('contact') }}">Recent Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Programs</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about') }}">Ungraduate Programs</a></li>
                                    <li><a href="{{ route('about') }}">Graduate Programs</a></li>
                                    <li><a href="{{ route('about') }}">Certificate Programs</a></li>
                                    <li><a href="{{ route('about') }}">Accelerate Programs</a></li>
                                    <li><a href="{{ route('about') }}">Online Programs</a></li>
                                    <li><a href="{{ route('about') }}">Financial Planning</a></li>
                                    <li><a href="{{ route('about') }}">Business Advisory</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget th-widget-instagram footer-widget">
                            <h3 class="widget_title">Instagram</h3>
                            <div class="instagram-feeds">
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-1.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-1.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-2.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-2.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-3.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-3.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-4.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-4.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-5.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-5.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-6.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-6.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-7.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-7.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-8.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-8.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="{{ asset('assets/img/widget/insta-feed-1-9.jpg') }}" alt="Image">
                                    <a href="{{ asset('assets/img/widget/insta-feed-1-9.jpg') }}" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap z-index-common">
            <div class="container th-container4">
                <div class="row justify-content-center gy-3 align-items-center">
                    <div class="col-md-7">
                        <p class="copyright-text">
                            <i class="fal fa-copyright"></i> Copyright 2025 <a href="{{ route('home.university') }}">Stadum</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-5 text-md-end text-center">
                        <div class="th-social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
modal Area  
==============================-->
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Register</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="mail.php" method="POST" class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Username or email</label>
                                <input type="text" class="form-control" name="email" id="email" required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pasword" id="pasword" required="required">
                            </div>

                            <div class="form-btn mb-20 col-12">
                                <button class="th-btn btn-fw th-radius2 ">Send Message</button>
                            </div>
                        </div>
                        <div id="forgot_url">
                            <a href="#">Forgot password?</a>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="mail.php" method="POST" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="usename" id="usename" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>First name*</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>Last name*</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email">Your email*</label>
                            <input type="text" class="form-control" name="new_email" id="new_email" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email_confirm">Confirm email*</label>
                            <input type="text" class="form-control" name="new_email_confirm" id="new_email_confirm" required="required">
                        </div>
                        <div class="statement">
                            <span class="register-notes">A password will be emailed to you.</span>
                        </div>

                        <div class="form-btn mt-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Wow Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- Gsap Animation -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- ScrollTrigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- SplitText -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- Lenis Js -->
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>