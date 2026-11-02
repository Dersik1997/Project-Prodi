<!doctype html>
<html class="no-js " lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stadum - University Education HTML Template - Alumni Page</title>
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
                        <h1 class="breadcumb-title">Alumni Page</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home.university') }}">Home</a></li>
                            <li>Alumni Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Alumni Area  
==============================-->

    <section class="alumni-area position-relative space">
        <div class="container th-container4">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-5 col-xxl-3">
                    <div class="title-area">
                        <span class="page-title text-title">Stadum Alamni</span>
                        <h2 class="h4 mt-30">Shared experiences among friends since 1999</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-5">
                    <div class="title-area">
                        <h3 class="box-title text-theme">For 120 years, Stadum University has been a community built on
                            faith, strength, history and commitment.</h3>
                        <p>The connections and friendships made at Friends University continue long after graduation day. As
                            an alumni, friend or benefactor of Friends University, you are integral to the construction of
                            that rich tradition. Today, you have the opportunity to strengthen that legacy for future
                            Friends University students.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row gy-4 mt-60">
                            <div class="col-12">
                                <div class="video-box2" data-bg-src="{{ asset('assets/img/bg/video_bg_2.jpg') }}">
                                    <div class="video-wrapp">
                                        <div class="discount-wrapp">
                                            <a href="https://www.youtube.com/watch?v=EZfLOSQ8hW8" class="play-btn popup-video">
                                                <i class="fa-sharp fa-solid fa-play"></i>
                                            </a>
                                            <div class="discount-tag">
                                                <span class="discount-anime">* 1996 EST * 25 Years Quality Teaching</span>
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
    </section><!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area2 bg-title overflow-hidden space overflow-hidden" id="testi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="title-area text-center">
                        <span class="sub-title text-anime">TESTIMONIALS</span>
                        <h2 class="sec-title  text-anime2 text-white">Why I love Stadum</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slider-area">
                    <div class="swiper th-slider testiSlide2 has-shadow" id="testiSlide2" data-slider-options='{"effect":"slide","loop":true}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="box-text">At Stadum University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts. Devoting that amount of time to a career that brings you challenge, growth and fulfillment is critical life.</p>
                                    <div class="quote" data-mask-src="{{ asset('assets/img/icon/quote2.svg') }}"></div>
                                    <div class="box-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_2_1.jpg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title">Michel John</h3>
                                    <p class="box-desig">Graduate Student</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="box-text">At Stadum University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts. Ducamb welcomed every pain avoided but in certa mstances owing to the claims of igation that off bu will frequently occuthe</p>
                                    <div class="quote" data-mask-src="{{ asset('assets/img/icon/quote2.svg') }}"></div>
                                    <div class="box-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_2_2.jpg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title">Maliha Alizabeth</h3>
                                    <p class="box-desig">Graduate Student</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="box-text">At Stadum University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts. Devoting that amount of time to a career that brings you challenge, growth and fulfillment is critical life.</p>
                                    <div class="quote" data-mask-src="{{ asset('assets/img/icon/quote2.svg') }}"></div>
                                    <div class="box-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_2_3.jpg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title">Michel Smith</h3>
                                    <p class="box-desig">Graduate Student</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <p class="box-text">At Stadum University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts. Ducamb welcomed every pain avoided but in certa mstances owing to the claims of igation that off bu will frequently occuthe</p>
                                    <div class="quote" data-mask-src="{{ asset('assets/img/icon/quote2.svg') }}"></div>
                                    <div class="box-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_2_4.jpg') }}" alt="img">
                                    </div>
                                    <h3 class="box-title">Jessica Lauren</h3>
                                    <p class="box-desig">Graduate Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                    <div class="testi-grid-dots" data-slider-tab="#testiSlide2">
                        <div class="tab-btn active"> <img src="{{ asset('assets/img/testimonial/testi_2_1.jpg') }}" alt="Image"></div>
                        <div class="tab-btn"> <img src="{{ asset('assets/img/testimonial/testi_2_2.jpg') }}" alt="Image"></div>
                        <div class="tab-btn"> <img src="{{ asset('assets/img/testimonial/testi_2_3.jpg') }}" alt="Image"></div>
                        <div class="tab-btn"> <img src="{{ asset('assets/img/testimonial/testi_2_4.jpg') }}" alt="Image"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX" data-top="10%" data-right="6%"><img src="{{ asset('assets/img/shape/element-7.png') }}" alt="">
        </div>
    </section><!--==============================
Event Area 1
==============================-->
    <section class="event-area-1 position-relative space overflow-hidden" id="event-sec">
        <div class="event-shape shape-mockup d-none d-xxl-block" data-top="5%" data-right="5%">
            <img src="{{ asset('assets/img/shape/shape-10.png') }}" alt="">
        </div>
        <div class="container th-container4">
            <div class="title-area">
                <span class="sub-title text-anim">Events</span>
                <h2 class="sec-title text-anim2">Upcoming Events</h2>
            </div>
            <div class="event-card-wrap">
                <div class="event-card style3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="event-card-img global-img">
                        <img src="{{ asset('assets/img/event/event-3-1.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">12</span>Jan</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="{{ route('blog.details') }}">Programming languages for a better world</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this question has
                                crucially helped humanity with
                                achieving one of its most impressive feats yet: orchestrating electric currents.
                                Private Kansas colleges don’t have to exceed your budget. </p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest assured—you can
                                afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s">
                                <a class="location" href="#">
                                    <i class="fa-solid fa-location-dot"></i>
                                    25 Circular Road, New York City </a>
                                <a class="date" href="#">
                                    <i class="fa-regular fa-calendar-days"></i>
                                    25.02.2025 </a>
                                <a class="time" href="#">
                                    <i class="fa-solid fa-clock"></i>
                                    09:00am - 12:00pm </a>
                            </div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s">
                            <a class="th-btn style-border1 th-icon" href="{{ route('event.details') }}">Details</a>
                        </div>
                    </div>
                </div>

                <div class="event-card style3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="event-card-img global-img">
                        <img src="{{ asset('assets/img/event/event-3-2.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">07</span>Feb</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="{{ route('blog.details') }}">Center for Subjectivity Research 2009-2030</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this question has
                                crucially helped humanity with
                                achieving one of its most impressive feats yet: orchestrating electric currents.
                                Private Kansas colleges don’t have to exceed your budget. </p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest assured—you can
                                afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s">
                                <a class="location" href="#">
                                    <i class="fa-solid fa-location-dot"></i>
                                    25 Circular Road, New York City </a>
                                <a class="date" href="#">
                                    <i class="fa-regular fa-calendar-days"></i>
                                    03.08.2025 </a>
                                <a class="time" href="#">
                                    <i class="fa-solid fa-clock"></i>
                                    10:00am - 03:20pm </a>
                            </div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s">
                            <a class="th-btn style-border1 th-icon" href="{{ route('event.details') }}">Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--==============================
Blog Area 3
==============================-->
    <section class="blog-arae-3 overflow-hidden  overflow-hidden" id="blog-sec">
        <div class="container th-container4">
            <div class="title-area text-center">
                <span class="sub-title text-anim">BLOG & NEWS</span>
                <h2 class="sec-title text-anim2">Latest blog & Articles</h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider2" data-slider-options='{"autoplay": false,"breakpoints": {"0": {"slidesPerView": 1},"576": {"slidesPerView": "1"},
                         "768": {"slidesPerView": "1"},"992": {"slidesPerView": 2},"1299": {"slidesPerView": 3},"1400": {"slidesPerView": 3, "spaceBetween": "32"}},"autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_1.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">24</h5>
                                        <p class="blog-date-text">june, 25</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">How Motivated When Learning Something New</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_2.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">29</h5>
                                        <p class="blog-date-text">june, 18</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">What's the Secret to Reading Books Effectively?</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_3.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">18</h5>
                                        <p class="blog-date-text">june, 25</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">Why Setting Goals Can Improve Your Learning Skills</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_1.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">24</h5>
                                        <p class="blog-date-text">june, 18</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">How to Stay Motivated When Learning Something New</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_2.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">29</h5>
                                        <p class="blog-date-text">june, 25</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">What's the Secret to Reading Books Effectively?</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_3.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">18</h5>
                                        <p class="blog-date-text">june, 18</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">Why Setting Goals Can Improve Your Learning Skills</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_1.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">24</h5>
                                        <p class="blog-date-text">june, 25</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">How to Stay Motivated When Learning Something New</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education.</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide fadeinup wow">
                            <div class="blog-card blog-card2 style2">
                                <div class="blog-img2 position-relative">
                                    <a href="{{ route('blog.details') }}">
                                        <div class="blog-img-box2 position-relative">
                                            <img src="{{ asset('assets/img/blog/blog_3_2.jpg') }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="blog-date">
                                        <h5 class="blog-date-title">29</h5>
                                        <p class="blog-date-text">june, 18</p>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a class="author" href="{{ route('blog.index') }}">
                                            <span class="author-icon"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img"></span>
                                            By themeholy
                                        </a>
                                        <a href="{{ route('blog.index') }}"><span class="comment-icon"><i class="fa-solid fa-comments"></i></span> 0 Comment </a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('blog.details') }}">What's the Secret to Reading Books Effectively?</a></h3>
                                    <p class="box-text">At Stadum University we are committed to providing a high-quality education</p>
                                    <div class="btn-wrap">
                                        <a href="{{ route('blog.details') }}" class="th-btn th-icon style-border1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
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