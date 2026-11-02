<!doctype html>
<html class="no-js " lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stadum - University Education HTML Template - 404 Page</title>
    <meta name="author" content="Stadum">
    <meta name="description" content="Stadum - University Education HTML Template">
    <meta name="keywords" content="Stadum - University Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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
            <img src="assets/img/logo-ummi.png" alt="Universitas Muhammadiyah Sukabumi">
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
                            <img src="assets/img/logo2.svg" alt="Stadum">
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
                            <a href="{{ route('blog.details') }}"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
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
                            <a href="{{ route('blog.details') }}"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
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
                            <a href="{{ route('blog.details') }}"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
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
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home.university') }}"><img src="assets/img/logo.svg" alt="Stadum"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home.university') }}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}">University Home</a></li>
                            <li><a href="{{ route('home.admission') }}">Admission Home</a></li>
                            <li><a href="{{ route('home.courses') }}">Course Home</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Programs</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('program.index') }}">Programs Style 1</a></li>
                            <li><a href="{{ route('program.program-2') }}">Programs Style 2</a></li>
                            <li><a href="{{ route('program.details') }}">Program Details</a></li>
                            <li><a href="{{ route('program.details-sidebar') }}">Program Details With Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                                    <li><a href="{{ route('shop.details') }}">Shop Details</a></li>
                                    <li><a href="{{ route('shop.cart') }}">Cart Page</a></li>
                                    <li><a href="{{ route('shop.checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('shop.wishlist') }}">Wishlist</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Faculties</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('faculty.index') }}">Faculty</a></li>
                                    <li><a href="{{ route('faculty.details') }}">Faculty Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('alumni') }}">Alumni Page</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Researches</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('research.index') }}">Research</a></li>
                                    <li><a href="{{ route('research.details') }}">Research Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Teachers</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('teacher.index') }}">Teacher</a></li>
                                    <li><a href="{{ route('teacher.details') }}">Teacher Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('campus') }}">Campus Life</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing Plan</a></li>
                            <li><a href="{{ route('faq') }}">Faqs Page</a></li>
                            <li><a href="{{ route('error') }}">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Events</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('event.index') }}">Events Page</a></li>
                            <li><a href="{{ route('event.details') }}">Event Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blogs</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li><a href="{{ route('blog.details') }}">Blog Details</a></li>
                            <li><a href="{{ route('blog.details-sidebar') }}">Blog Details With Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Header Area
==============================-->
    <header class="th-header header-layout2">
        <div class="header-top">
            <div class="container th-container4">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul class="header-left-wrap">
                                <li>
                                    <div class="dropdown-link">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"> Studients</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <li>
                                                <a href="#">Scrollship</a>
                                                <a href="#">Forening</a>
                                                <a href="#">Online</a>
                                                <a href="#">Bysexual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('contact') }}">Staff</a></li>
                                <li><a href="{{ route('alumni') }}">Alumni</a></li>
                                <li><a href="{{ route('faculty.index') }}">Faculty</a> </li>
                                <li><a href="{{ route('contact') }}">Community</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul class="header-right-wrap">
                                <li><i class="fa-solid fa-user"></i><a href="#login-form" class="popup-content">Login / Register</a></li>
                                <li><i class="fas fa-comments"></i><a href="{{ route('faq') }}">FAQ</a></li>
                                <li>
                                    <div class="dropdown-link">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/img/icon/lang.svg" alt=""> </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <li>
                                                <a href="#">German</a>
                                                <a href="#">French</a>
                                                <a href="#">Italian</a>
                                                <a href="#">Latvian</a>
                                                <a href="#">Spanish</a>
                                                <a href="#">Greek</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home.university') }}">
                                    <img src="assets/img/light-white-logo.svg" alt="Stadum">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('home.university') }}">Home</a>
                                        <ul class="mega-menu mega-menu-content mega-scroll">
                                            <li>
                                                <div class="container">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-university.jpg" alt="Home One">
                                                                    <div class="btn-wrap">
                                                                        <a href="{{ route('home.university') }}" class="th-btn">Multipage</a>
                                                                        <a href="{{ route('home.university-onepage') }}" class="th-btn">Onepage</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.university') }}">Home University</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-admission.jpg" alt="Home Two">
                                                                    <div class="btn-wrap">
                                                                        <a href="{{ route('home.admission') }}" class="th-btn">Multipage</a>
                                                                        <a href="{{ route('home.admission-onepage') }}" class="th-btn">Onepage</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.admission') }}">Home Admission</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="assets/img/pages/home-courses.jpg" alt="Home Three">
                                                                    <div class="btn-wrap">
                                                                        <a href="{{ route('home.courses') }}" class="th-btn">Multipage</a>
                                                                        <a href="{{ route('home.courses-onepage') }}" class="th-btn">Onepage</a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.courses') }}">Home Courses</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Programs</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('program.index') }}">Programs Style 1</a></li>
                                            <li><a href="{{ route('program.program-2') }}">Programs Style 2</a></li>
                                            <li><a href="{{ route('program.details') }}">Program Details</a></li>
                                            <li><a href="{{ route('program.details-sidebar') }}">Program Details With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('shop.index') }}">Shop</a></li>
                                                    <li><a href="{{ route('shop.details') }}">Shop Details</a></li>
                                                    <li><a href="{{ route('shop.cart') }}">Cart Page</a></li>
                                                    <li><a href="{{ route('shop.checkout') }}">Checkout</a></li>
                                                    <li><a href="{{ route('shop.wishlist') }}">Wishlist</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">Faculties</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('faculty.index') }}">Faculty</a></li>
                                                    <li><a href="{{ route('faculty.details') }}">Faculty Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('alumni') }}">Alumni Page</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Researches</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('research.index') }}">Research</a></li>
                                                    <li><a href="{{ route('research.details') }}">Research Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Teachers</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('teacher.index') }}">Teacher</a></li>
                                                    <li><a href="{{ route('teacher.details') }}">Teacher Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('campus') }}">Campus Life</a></li>
                                            <li><a href="{{ route('pricing') }}">Pricing Plan</a></li>
                                            <li><a href="{{ route('faq') }}">Faqs Page</a></li>
                                            <li><a href="{{ route('error') }}">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('event.index') }}">Events Page</a></li>
                                            <li><a href="{{ route('event.details') }}">Event Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blogs</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                            <li><a href="{{ route('blog.details') }}">Blog Details</a></li>
                                            <li><a href="{{ route('blog.details-sidebar') }}">Blog Details With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="header-right">
                                <button class="header-search searchBoxToggler">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </button>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-xl-block"><img src="assets/img/icon/grid.svg" alt=""></a>
                                <div class="header-action">
                                    <a href="{{ route('contact') }}" class="th-btn th-icon"> Apply Now</a>
                                </div>
                                <button type="button" class="th-menu-toggle d-inline-block d-xl-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper position-relative " data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner">
            <img src="assets/img/breadcrumb/breadcumb-banner.png" alt="bg-banner">
        </div>
        <div class="breadcumb-shape">
            <img src="assets/img/shape/triangle-light.png" alt="shape" class="jump">
        </div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">404 Page</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home.university') }}">Home</a></li>
                            <li>404 Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Error Area 
==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-page">
                        <div class="error-img">
                            <img src="assets/img/normal/error.png" alt="404 image">
                        </div>
                        <div class="error-content">
                            <h5 class="">uh-oh! Nothing here...</h5>
                            <h2 class="page-title mt-n2">The page doesn’t exit</h2>
                            <p class="error-text mb-35">The page you are looking for doesn't exist or has been moved.</p>
                            <a href="{{ route('home.university') }}" class="th-btn">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-wrapper footer-layout3" data-bg-src="assets/img/bg/footer-bg-2.png">
        <div class="container th-container4">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('home.university') }}">
                                        <img src="assets/img/logo2.svg" alt="Stadum">
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
                                    <img src="assets/img/widget/insta-feed-1-1.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-1.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-2.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-2.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-3.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-3.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-4.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-4.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-5.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-5.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-6.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-6.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-7.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-7.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-8.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-8.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="insta-thumb">
                                    <img src="assets/img/widget/insta-feed-1-9.jpg" alt="Image">
                                    <a href="assets/img/widget/insta-feed-1-9.jpg" class="insta-btn popup-image"><i class="fab fa-instagram"></i></a>
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
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Wow Js -->
    <script src="assets/js/wow.min.js"></script>

    <!-- Gsap Animation -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- ScrollTrigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- SplitText -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Lenis Js -->
    <script src="assets/js/lenis.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>