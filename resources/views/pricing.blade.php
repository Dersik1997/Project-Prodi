<!doctype html>
<html class="no-js " lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stadum - University Education HTML Template - Pricing Plan</title>
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
                        <h1 class="breadcumb-title">Pricing Plan</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home.university') }}">Home</a></li>
                            <li>Pricing Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Price Area  
==============================-->
    <section class="space-top overflow-hidden position-relative">
        <div class="container th-container4">
            <div class="row gx-0">
                <div class="price-item_wrapp">
                    <div class="price-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/normal/price-img1.jpg') }}" alt="">
                        </div>
                        <div class="price-content">
                            <div class="">
                                <div class="price-left">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/hat.svg') }}" alt="">
                                    </div>
                                    <h3 class="box-title">Graduate Programs</h3>
                                </div>
                                <div class="price-descrition">
                                    <span class="text">Tuition Fees:</span>
                                    <p>Starting at <span class="price">$10,000 - $20,000</span> per semester, depending on the
                                        field
                                        of study.</p>
                                </div>

                                <div class="btn-wrap">
                                    <a href="{{ route('contact') }}" class="th-btn th-icon"> Get Started</a>
                                    <a href="{{ route('contact') }}" class="th-btn style-border1 th-icon"> Learn More</a>
                                </div>
                            </div>
                            <div class="divided"></div>
                            <div class="price-list_wrapp">
                                <div class="pricce-list">
                                    <h3 class="box-title">Scholarships:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Up to 50% tuition waiver for qualifying students.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Research/Thesis Costs:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Additional $1,000 - $2,500 (for applicable programs).</li>
                                            <li>Textbooks: $500 - $1,000 annually (estimation).</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Payment Options:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Semester-wise or custom payment.</li>
                                            <li>Monthly installment plans available.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/normal/price-img2.jpg') }}" alt="">
                        </div>
                        <div class="price-content">
                            <div class="">
                                <div class="price-left">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/hat.svg') }}" alt="">
                                    </div>
                                    <h3 class="box-title">Undergraduate Programs</h3>
                                </div>
                                <div class="price-descrition">
                                    <span class="text">Tuition Fees:</span>
                                    <p>Starting at <span class="price">$8,000 - $15,000</span> per semester, depending on the
                                        field
                                        of study.</p>
                                </div>

                                <div class="btn-wrap">
                                    <a href="{{ route('contact') }}" class="th-btn th-icon"> Get Started</a>
                                    <a href="{{ route('contact') }}" class="th-btn style-border1 th-icon"> Learn More</a>
                                </div>
                            </div>
                            <div class="divided"></div>
                            <div class="price-list_wrapp">
                                <div class="pricce-list">
                                    <h3 class="box-title">Scholarships:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Up to 50% tuition waiver for qualifying students.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Additional Costs:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Lab/Studio Fees: $200 - $500 (varies by course).</li>
                                            <li>Textbooks: $500 - $1,000 annually (estimation).</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Payment Options:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Full upfront payment.</li>
                                            <li>Monthly installment plans available.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/normal/price-img3.jpg') }}" alt="">
                        </div>
                        <div class="price-content">
                            <div class="">
                                <div class="price-left">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/hat.svg') }}" alt="">
                                    </div>
                                    <h3 class="box-title">Professional Certificate</h3>
                                </div>
                                <div class="price-descrition">
                                    <span class="text">Tuition Fees:</span>
                                    <p>Short ter course <span class="price">$1,000 - $3,500 </span></p>
                                    <p>Long term certificate <span class="price">$5,000 - $10,000</span></p>
                                </div>

                                <div class="btn-wrap">
                                    <a href="{{ route('contact') }}" class="th-btn th-icon"> Get Started</a>
                                    <a href="{{ route('contact') }}" class="th-btn style-border1 th-icon"> Learn More</a>
                                </div>
                            </div>
                            <div class="divided"></div>
                            <div class="price-list_wrapp">
                                <div class="pricce-list">
                                    <h3 class="box-title">Scholarships:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Up to 50% tuition waiver for qualifying students.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Research/Thesis Costs:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Additional $1,000 - $2,500 (for applicable programs).</li>
                                            <li>Textbooks: $500 - $1,000 annually (estimation).</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Flexible Payment:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Available for programs exceeding $3,000.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="box-img global-img">
                            <img src="{{ asset('assets/img/normal/price-img4.jpg') }}" alt="">
                        </div>
                        <div class="price-content">
                            <div class="">
                                <div class="price-left">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/hat.svg') }}" alt="">
                                    </div>
                                    <h3 class="box-title">Online graduate Programs</h3>
                                </div>
                                <div class="price-descrition">
                                    <span class="text">Tuition Fees:</span>
                                    <p>Starting at <span class="price">$5,000 - $1,2000 </span> per semester, depending on the
                                        field
                                        of study.</p>
                                </div>

                                <div class="btn-wrap">
                                    <a href="{{ route('contact') }}" class="th-btn th-icon"> Get Started</a>
                                    <a href="{{ route('contact') }}" class="th-btn style-border1 th-icon"> Learn More</a>
                                </div>
                            </div>
                            <div class="divided"></div>
                            <div class="price-list_wrapp">
                                <div class="pricce-list">
                                    <h3 class="box-title">Scholarships:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Up to 50% tuition waiver for qualifying students.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Technology Fees:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>$100 per semester.</li>
                                            <li>Textbooks: $500 - $1,000 annually (estimation).</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="pricce-list">
                                    <h3 class="box-title">Payment Options:</h3>
                                    <div class="checklist style6">
                                        <ul>
                                            <li>Early enrollment: 10% off.</li>
                                            <li>Group enrollments (5+ students): 15% off per participant.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Faq Area
==============================-->
    <section class="space overflow-hidden overflow-hidden">
        <div class="container th-container4">
            <div class="row gy-4 gx-60 flex-row-reverse">
                <div class="col-xl-7">
                    <div class="page-single mb-0">
                        <div class="title-area">
                            <span class="sub-title text-anim">FAQ</span>
                            <h2 class="sec-title text-anim2">At Stadum Basic FAQs </h2>
                            <p class="box-text2 mt-20 wow fadeInUp" data-wow-delay=".3s">At Stadum University we are
                                committed to providing a high-quality education that is accessible. </p>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">01. Where situated the Stadum universtiy?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">02. What are the application deadlines?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">03. How do I apply to the university?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">04.What documents are required ?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">05. Do you offer application fee waivers?</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">06. What is the minimum GPA requirement?</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2 ">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">07. Is there an interview process for admission?</button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse " aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At stadum eductin, we redefine consultancy through a dynamic
                                            fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                            committed to delivering tailored solutions that transcend traditional consulting
                                            boundaries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="d-block mt-40"><a href="{{ route('faq') }}"> Have more questions? </a> Check our help center or
                        contact our <a href="{{ route('contact') }}"> support team </a></span>

                </div>
                <div class="col-xl-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_banner3  " data-bg-src="{{ asset('assets/img/widget/widget-banner2.jpg') }}">
                            <div class="widget-banner">
                                <h2 class="title">Get Courses for Better career</h2>
                                <p class="text">Top 20 courses among our 1350+ free online courses by experts</p>
                                <a href="{{ route('contact') }}" class="th-btn th-icon white-hover">Apply Now</a>
                            </div>
                        </div>
                        <div class="top-rated">
                            <h3 class="h4">Top Rated Online Courses</h3>
                            <div class="author-item">
                                <div class="author"><img src="{{ asset('assets/img/shape/author-img.png') }}" alt=""></div>
                                <h4 class="title">Learners Reviews</h4>
                                <p class="text">29k Satsfied Students</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="faq-shape shape-mockup spin d-none d-xl-block" data-bottom="18%" data-left="2%"><img src="{{ asset('assets/img/shape/shape-11.png') }}" alt="Stadum"></div>
        <div class="faq-shape shape-mockup movingX d-none d-xl-block" data-top="3%" data-right="5%"><img src="{{ asset('assets/img/shape/shape-12.png') }}" alt="Stadum"></div>
    </section>
    <div class="addmission-area overflow-hidden space-top overflow-hidden">
        <div class="addmission-bg-thumb overflow-hidden gsap-parallax">
            <img src="{{ asset('assets/img/bg/admission-home-2.png') }}" alt="Stadum">
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim">ADDMISSION TODAY</span>
                <h2 class="sec-title text-anim2 mb-55 text-white">Apply for admission</h2>
                <div class="box-text-wrap mt-25">
                    <p class="box-text text-white wow fadeInUp" data-wow>
                        Welcome to the gateway of possibilities your admission to Stadum University.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="admission-forum-wrap overflow-hidden">
        <div class="container">
            <div class="admission-forum-inner">
                <div class="addmission-forum-thumb overflow-hidden">
                    <img src="{{ asset('assets/img/addmission/1.png') }}" alt="Stadum">
                </div>
                <div class="addmisson-forum">
                    <div class="row justify-content-end">
                        <!--==============================
Contact Area  
==============================-->
                        <div class="contact-form-v1 col-lg-7 col-md-12">
                            <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                <div class="row">
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="fristname" id="fristname3" placeholder="First name*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="lastname" id="lastname3" placeholder="Last name*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="email" class="form-control" name="email" id="email3" placeholder="e-mail address*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="number" class="form-control" name="number" id="number3" placeholder="Phone*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="date" class="form-control" name="date" id="date3">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="country" id="country3" placeholder="Country*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="city" id="city3" placeholder="City*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="zipcode" id="zipcode3" placeholder="Zip Code*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <input type="text" class="form-control" name="address" id="address3" placeholder="Address*">
                                    </div>
                                    <div class="form-group style-border col-md-6">
                                        <select name="subject" id="subject3" class="form-select">
                                            <option value="" disabled selected hidden>Your Subject</option>
                                            <option value="Web Development">Computer Seince</option>
                                            <option value="Brand Marketing">Astrophysics</option>
                                            <option value="UI/UX Designing">Mechanical Engineering</option>
                                            <option value="Digital Marketing">Data Science</option>
                                        </select>
                                    </div>
                                    <div class="form-group style-border col-12">
                                        <textarea name="message" id="message3" cols="30" rows="3" class="form-control" placeholder="Write your message*"></textarea>
                                    </div>
                                    <div class="form-btn col-12 mt-15">
                                        <button class="th-btn th-btn white-hover">Send Message</button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
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