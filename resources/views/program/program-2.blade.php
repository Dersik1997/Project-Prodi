<!doctype html>
<html class="no-js " lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stadum - University Education HTML Template - program</title>
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
                        <h1 class="breadcumb-title">All Programs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home.university') }}">Home</a></li>
                            <li>All Programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Program Area Home 2 
==============================-->
    <section class="program-area2 position-relative overflow-hidden space overflow-hidden" id="program-sec">
        <div class="container th-container4">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-xxl-6">
                    <div class="title-area pe-xl-4">
                        <h2 class="sec-title text-anim2">We have 85+ Programs in <span class="d-block">stadum
                                University</span></h2>
                        <p class="mt-20 wow fadeInUp" data-wow-delay=".3s">A great career starts with a great education, and
                            stadum will be with you every step of the way. With our Pathway to Profession, we don’t just
                            point you in the right direction. We also give you the tools you need to reach your destination
                            – a rewarding career in the field of your choosing.</p>
                        <span><a href="{{ route('faq') }}"> Have more questions? </a> Check our help center or contact our <a href="{{ route('contact') }}"> support team </a></span>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3">
                    <div class="title-area">
                        <h2 class="sec-title">Degree & Majors</h2>
                        <div class="program-btn mt-25">
                            <a href="{{ route('about') }}" class="th-btn style-border2">Undergraduate Degrees</a>
                            <a href="{{ route('about') }}" class="th-btn style-border2">Graduate Degrees</a>
                            <a href="{{ route('about') }}" class="th-btn style-border2">Online Degress</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-2">
                    <div class="program-image global-img">
                        <img src="{{ asset('assets/img/program/program_2_1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="program-image global-img">
                        <img src="{{ asset('assets/img/program/program_2_2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="program-image global-img">
                        <img src="{{ asset('assets/img/program/program_2_3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="program-image global-img">
                        <img src="{{ asset('assets/img/program/program_2_4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="program-image global-img">
                        <img src="{{ asset('assets/img/program/program_2_5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xl-inline-block" data-bottom="0%" data-right="0%">
            <img src="{{ asset('assets/img/shape/shape-9.png') }}" alt="Stadum">
        </div>
    </section>
    <section class="faq-area-4 position-relative overflow-hidden space-bottom overflow-hidden" id="faq-sec">
        <div class="container th-container4">
            <div class="space-extra-bottom">
                <div class="title-area">
                    <h2 class="sec-title text-center">Undergraduate Programs</h2>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_1.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Computer Science</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_2.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Biochemistry</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_3.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Business Admistration</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_4.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Accounting</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_5.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Biology</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_6.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Criminal Justice</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Analytic Biochemist</li>
                                        <li>Clinical Laboratory Technologist</li>
                                        <li>Criminalist</li>
                                        <li>Immunologist</li>
                                        <li>Medical Technologist</li>
                                        <li>Microbiologist</li>
                                        <li>Quality Control Technician</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-extra-bottom">
                <div class="title-area">
                    <h2 class="sec-title text-center">Graduate Programs</h2>
                </div>
                <div class="row gy-4">

                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_7.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Conservation Science</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_8.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Art Education</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_9.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Chemistry</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_10.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Finance</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_11.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Health Management</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_12.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Health & Physical Education</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="title-area">
                    <h2 class="sec-title text-center">Online Graduate Programs</h2>
                </div>
                <div class="row gy-4">

                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_13.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Health Care</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_14.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Education</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_15.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Leadership</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_16.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Information System</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_17.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Mangement</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="program-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('assets/img/program/program_3_18.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Master of Business</h3>
                                <div class="box-subject">
                                    <ul>
                                        <li>Budget Analyst</li>
                                        <li>Business Systems Analyst</li>
                                        <li>Credit Analyst</li>
                                        <li>Financial Analyst</li>
                                        <li>Financial Examiners/Auditor</li>
                                        <li>Financial Planner</li>
                                        <li>Investment Banker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Process Area  
==============================-->
    <section class="process-area space overflow-hidden position-relative space-bottom overflow-hidden">
        <div class="container th-container4">
            <div class="title-area text-center">
                <span class="sub-title">ADDMISSION PROCESS</span>
                <h2 class="sec-title">Apply stadum university in 3 easy steps</h2>
            </div>
            <div class="process-card_wrapp">
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">01 <span class="step">Step</span></span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Apply through online form</h2>
                        <p class="process-card_text">Tell us a little about yourself and we’ll help with the rest. Our convenient online application tool only takes 5 minutes to complete.</p>
                        <a class="th-btn style-border1 th-icon" href="{{ route('contact') }}">Apply Now</a>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('assets/img/icon/process_1_1.svg') }}" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">02 <span class="step">Step</span></span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Participate in online exam</h2>
                        <p class="process-card_text">After you submit your application, an admissions representative will contact you and will help you to participate in the online exam.</p>
                        <a class="th-btn style-border1 th-icon" href="{{ route('contact') }}">Apply Now</a>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('assets/img/icon/process_1_2.svg') }}" alt="Process">
                    </div>
                </div>
                <div class="process-card">
                    <div class="process-card_icon">
                        <span class="number">03 <span class="step">Step</span></span>
                    </div>
                    <div class="process-card_content">
                        <h2 class="box-title">Get ready for the journey</h2>
                        <p class="process-card_text">Once you’ve completed your application and connected with an admissions representative, you’re ready to create your schedule.</p>
                        <a class="th-btn style-border1 th-icon" href="{{ route('contact') }}">Apply Now</a>
                    </div>
                    <div class="process-card_img">
                        <img src="{{ asset('assets/img/icon/process_1_3.svg') }}" alt="Process">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-bottom="2%" data-right="3%">
            <img src="{{ asset('assets/img/shape/shape-10.png') }}" alt="shape">
        </div>
    </section> <!--==============================
Team Area  
==============================-->
    <section class="team-area3 space overflow-hidden" id="instr-sec">
        <div class="instr-shape1 shape-mockup movingX d-none d-xl-block" data-right="14%" data-top="8%"><img src="{{ asset('assets/img/shape/cat-3-1.png') }}" alt="Stadum"></div>
        <div class="container th-container4">
            <div class="row justify-content-between">
                <div class="col-xxl-4 col-xl-9 col-lg-8 col-md-10">
                    <div class="title-area">
                        <span class="sub-title text-anim">PROFESSORS</span>
                        <h2 class="sec-title text-anim2">University Professors</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn">
                        <div class="icon-box d-none d-lg-flex">
                            <button data-slider-prev="#teamSlider3" class="slider-arrow style3 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#teamSlider3" class="slider-arrow style3 default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider instr-slider1" id="teamSlider3" data-slider-options='{"breakpoints": {"0":{"slidesPerView": 1, "autoplay" : "true"},"768":{"slidesPerView": 2},
                    "992":{"slidesPerView": 3},"1299":   {"slidesPerView": 3},"1300":{"slidesPerView": 4}},"slidesPerView" : "4","spaceBetween": "24","loop": "true","autoplay" : "false"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-1.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Kristin Watson</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-2.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Ralph Edwards</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-3.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Jerome Bell</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-4.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Leslie Alexander</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-5.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Priya Ray</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-6.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Ralph Edwards</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-7.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Jerome Bell</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="instr-card style2">
                                <div class="instr-img global-img">
                                    <img src="{{ asset('assets/img/mentor/3-8.png') }}" alt="Stadum">
                                </div>
                                <div class="box-content">
                                    <a href="{{ route('teacher.details') }}" class="card-icon"><i class="fa-light fa-angle-right"></i></a>
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="{{ route('teacher.index') }}">Alisa Smith</a></h3>
                                        <span class="instr-desig">Teacher of Development</span>
                                    </div>
                                    <div class="th-social style3">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <div class="line"></div>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <span class="instr-shape2 shape-mockup spin d-none d-xl-block" data-right="4%" data-bottom="6%"><img src="{{ asset('assets/img/shape/instr-3-1.png') }}" alt="Stadum"></span>
    </section><!--==============================
Marquee Area  
==============================-->
    <div class="marquee-area space-bottom  overflow-hidden">
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