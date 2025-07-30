<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GED Intermedia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/default-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/main.css') }}">
</head>

<body class="tgbg-black">
    <!--==============================
    Scroll-top-start
    ==============================-->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fa-sharp fa-regular fa-arrow-up"></i>
    </button>
    <!--==============================
    Scroll-top-end
    ==============================-->
    <div class="grid_over">
        <div class="mod_container">
            <div class="row">
                <div class="col-3 content_grid_item">
                    <div class="grid_item" style="transform: translate(0px, 0px);"></div>
                </div>
                <div class="col-3 content_grid_item">
                    <div class="grid_item" style="transform: translate(0px, 0px);"></div>
                </div>
                <div class="col-3 content_grid_item">
                    <div class="grid_item" style="transform: translate(0px, 0px);"></div>
                </div>
                <div class="col-3 content_grid_item">
                    <div class="grid_item" style="transform: translate(0px, 0px);"></div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    header-area-start
    ==============================-->
    <header class="tg-header-height">
        <div id="header-sticky" class="tg-header__area header-mobile-spacing p-relative">
            <div class="container-fluid container-1710">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-3">
                        <div class="tg-header-logo">
                            <a class="logo-1" href="#!"><img src="{{ asset('assets/asset/img/logo.jpeg') }}"
                                    alt="logo"></a>
                            <a class="d-none logo-2" href="#!"><img src="{{ asset('assets/asset/img/logo.jpeg') }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-none d-xl-block nav-link fs-6">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu tgmenu-main-4 ml-5">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children">
                                            <a href="#aboutUs">
                                                <span class="tgmenu-link-effect">
                                                    <span class="effect-1">We are about
                                                    </span>
                                                    <span class="effect-1"> We are about
                                                    </span>
                                                </span>
                                            </a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="">About</a></li>
                                                <!-- <li><a href="#valuesarea">Values</a></li> -->
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a href="#areasActivity">
                                                <span class="tgmenu-link-effect">
                                                    <span class="effect-1">Area of Activities </span>
                                                    <span class="effect-1">Area of Activities </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#howWeOperate">
                                                <span class="tgmenu-link-effect">
                                                    <span class="effect-1">How We Operate </span>
                                                    <span class="effect-1">How We Operate </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#!">
                                                <span class="tgmenu-link-effect">
                                                    <span class="effect-1">Contact US</span>
                                                    <span class="effect-1">Contact US</span>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#joinCapital">Enter DCC</a></li>
                                                <li><a href="#becomesCapitalCommunity">Become DCC</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-3">
                        <div class="tg-header-right tg-header-4-right d-flex align-items-center justify-content-end">

                            <div class="tg-header-btn ml-15 d-none d-sm-inline-block">
                                <a class="tg-btn tg-btn-primary tg-btn-hover" href="{{ route('userlogin') }}">
                                    <span class="hover-effect">
                                        <span class="effect-1">Reserved Area</span>
                                        <span class="effect-1">Reserved Area</span>
                                    </span>
                                </a>
                            </div>
                            <div class="tgmenu-offcanvas-open-bar menu-tigger ml-15 d-none d-xl-block">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="tgmenu-offcanvas-open-bar mobile-nav-toggler ml-15 d-block d-xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="tgmobile__menu tg-menu-large">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                <div class="nav-logo">
                    <a href="#!"><img data-width="160" src="{{ asset('assets/asset/img/logo/logo.png') }}"
                            alt="logo"></a>
                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="mt-30 ml-25 mr-25">
                    <a class="tg-btn tg-btn-hover w-100 text-center" href="#!">
                        <span class="hover-effect">
                            <span class="effect-1">Let’s talk</span>
                            <span class="effect-1">Let’s talk</span>
                        </span>
                    </a>
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#">
                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.33161 6.77486L15.1688 0H13.7856L8.71722 5.8826L4.66907 0H0L6.12155 8.89546L0 16H1.38336L6.73581 9.78785L11.0109 16H15.68L9.33148 6.77486H9.33187H9.33161ZM7.43696 8.97374L6.81669 8.088L1.88171 1.03969H4.00634L7.98902 6.72789L8.60929 7.61362L13.7863 15.0074H11.6616L7.43709 8.974V8.97361L7.43696 8.97374Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->
        <!-- offCanvas-menu -->
        <div class="offCanvas__info p-relative">
            <div class="offCanvas__close-icon menu-close">
                <button><i class="fa-sharp fa-regular fa-xmark"></i></button>
            </div>
            <div class="offCanvas__logo text-center mb-50">
                <a class="mb-40 d-block" href="#!"><img data-width="127"
                        src="{{ asset('assets/asset/img/logo.jpeg') }}" alt="logo"></a>
                <p>Businorem ipsum dolor sit amet cons interdum quam duis variuy time honored tradition etting .</p>
            </div>
            <div class="offcanvas-gallery mb-60">
                <a class="popup-image" href="{{ asset('assets/asset/img/ofcanvas/thumb.jpg') }}"><img class="m-img"
                        src="{{ asset('assets/asset/img/ofcanvas/thumb.jpg') }}" alt=""></a>
                <a class="popup-image" href="{{ asset('assets/asset/img/ofcanvas/thumb-2.jpg') }}"><img
                        class="m-img" src="{{ asset('assets/asset/img/ofcanvas/thumb-2.jpg') }}"
                        alt=""></a>
                <a class="popup-image" href="{{ asset('assets/asset/img/ofcanvas/thumb-3.jpg') }}"><img
                        class="m-img" src="{{ asset('assets/asset/img/ofcanvas/thumb-3.jpg') }}"
                        alt=""></a>
                <a class="popup-image" href="{{ asset('assets/asset/img/ofcanvas/thumb-4.jpg') }}"><img
                        class="m-img" src="{{ asset('assets/asset/img/ofcanvas/thumb-4.jpg') }}"
                        alt=""></a>
            </div>
            <div class="contact-list mb-60">
                <h4 class="mb-15">Information</h4>
                <a href="tel:(090)87658654385"><i class="fa-solid fa-phone"></i>+04203490364</a>
                <a href="mailto:hello@example.com"><i class="fa-solid fa-envelope"></i> hello@example.com</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Avenue de Roma 158b, Lisboa</a>
            </div>
            <div class="offCanvas__social-icon text-center">
                <span class="mb-15">Follow Us</span>
                <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a href="javascript:void(0)">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.33161 6.77486L15.1688 0H13.7856L8.71722 5.8826L4.66907 0H0L6.12155 8.89546L0 16H1.38336L6.73581 9.78785L11.0109 16H15.68L9.33148 6.77486H9.33187H9.33161ZM7.43696 8.97374L6.81669 8.088L1.88171 1.03969H4.00634L7.98902 6.72789L8.60929 7.61362L13.7863 15.0074H11.6616L7.43709 8.974V8.97361L7.43696 8.97374Z"
                            fill="currentColor" />
                    </svg>
                </a>
                <a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->
    </header>
    <!--==============================
    header-area-end
    ==============================-->

    <!--==============================
    main-area-start
    ==============================-->
    <main>

        <!--==============================
        hero-area-start
        ==============================-->
        <div id="" class="hero-area tg-hero-8-spacing p-relative fix">
            <img class="tg-hero-8-shape-two" src="{{ asset('assets/asset/img/hero/hero-8/shape.png') }}"
                alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tg-hero-8-wrap p-relative z-index-3 wow img-custom-anim-left">
                            <div class="heroImg">
                                <img src="{{ asset('assets/asset/img/hero/hero-8/author.png') }}" alt="">
                            </div>
                            <span class="tg-hero-8-author-position satellites1">
                                <img class="satellitesImg"
                                    src="{{ asset('assets/asset/img/hero/satellitesGld1.png') }}">
                                Real estate
                            </span>
                            <span class="tg-hero-8-author-position satellites2">
                                <img class="satellitesImg"
                                    src="{{ asset('assets/asset/img/hero/satellitesGld1.png') }}">
                                Finance
                            </span>
                            <span class="tg-hero-8-author-position satellites3">
                                <img class="satellitesImg"
                                    src="{{ asset('assets/asset/img/hero/satellitesGld1.png') }}">
                                Yachts & cars
                            </span>
                            <span class="tg-hero-8-author-position satellites4">
                                <img class="satellitesImg"
                                    src="{{ asset('assets/asset/img/hero/satellitesGld1.png') }}">
                                Art
                            </span>
                            <span class="tg-hero-8-author-position satellites5">
                                <img class="satellitesImg"
                                    src="{{ asset('assets/asset/img/hero/satellitesGld1.png') }}">
                                Private jets
                            </span>
                            <!-- <span class="tg-hero-8-subtitle mb-25">G. E. D. </span>
                            <h2 class="tg-hero-8-title mb-65">Intermedia</h2>
                            <div class="tg-hero-8-contact-info mb-35">
                                <a href="mailto:gedinfo@gmail.com">
                                    <i class="fa-regular fa-envelope"></i>
                                    gedinfo@gmail.com
                                </a>
                                <a href="tel:+12399982653">
                                    <i class="fa-regular fa-phone"></i>
                                    +0000000000000
                                </a>
                                <a href="mailto:gedinfo@gmail.com">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    linkedin.com/in/gigi-hadid
                                </a>
                                <a href="mailto:gedinfo@gmail.com">
                                    <i class="fa-regular fa-location-dot"></i>
                                    Atlanta, USA
                                </a>
                            </div>
                            <div class="tg-hero-8-btn d-flex align-items-center">
                                <span class="d-none d-sm-inline-block mr-160">
                                    <svg width="181" height="26" viewBox="0 0 181 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="12" width="180" height="1.5" fill="#CBCA7B" />
                                        <path d="M168.172 0C168.172 7.07266 173.678 12.7957 180.482 12.7957" stroke="#CBCA7B" stroke-width="1.5" stroke-miterlimit="10" />
                                        <path d="M180.482 12.7957C173.678 12.7957 168.172 18.5188 168.172 25.5914" stroke="#CBCA7B" stroke-width="1.5" stroke-miterlimit="10" />
                                    </svg>
                                </span>
                                <a href="#!" class="tg-btn-rounded tg-btn-rounded-white">
                                    <span>
                                        Contact <br> Us
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.7767 7.74985C15.9198 7.90198 16 8.10745 16 8.32158C16 8.5357 15.9198 8.74117 15.7767 8.89332L8.92138 16.1152C8.77516 16.2625 8.58094 16.3451 8.37867 16.3459C8.27759 16.3454 8.17746 16.3251 8.08351 16.2857C7.94489 16.2244 7.8266 16.1211 7.74358 15.989C7.66056 15.8569 7.61651 15.7019 7.61698 15.5435V9.12402H0.761697C0.559684 9.12402 0.365942 9.03948 0.223096 8.88899C0.0802502 8.73849 0 8.5344 0 8.32158C0 8.10876 0.0802502 7.90465 0.223096 7.75418C0.365942 7.60368 0.559684 7.51915 0.761697 7.51915H7.61698V1.09965C7.61651 0.941235 7.66056 0.786211 7.74358 0.654123C7.8266 0.522033 7.94489 0.418789 8.08351 0.357402C8.2242 0.29959 8.37756 0.284923 8.52585 0.3151C8.67412 0.345276 8.81125 0.419062 8.92138 0.52792L15.7767 7.74985Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <i class="tg-btn-circle-dot"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="tg-hero-8-thumb">
                            <span class="tg-hero-8-shape">
                                <svg width="1352" height="860" viewBox="0 0 1352 860" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_f_135_904)">
                                      <ellipse cx="608" cy="349.133" rx="608" ry="349.133" transform="matrix(-0.784614 -0.619984 -0.619984 0.784614 1818 849.901)" fill="#f4cc91" fill-opacity="0.6" />
                                    </g>
                                    <defs>
                                      <filter id="filter0_f_135_904" x="0.516602" y="-319.122" width="2247.97" height="2132.01" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="300" result="effect1_foregroundBlur_135_904" />
                                      </filter>
                                    </defs>
                                  </svg>
                            </span>
                            <img src="assets/img/hero/hero-8/author.png" alt="">
                            <span class="tg-hero-8-author-position satellites1">Real estate</span>
                            <span class="tg-hero-8-author-position satellites2">Finance</span>
                            <span class="tg-hero-8-author-position satellites3">Yachts & cars</span>
                            <span class="tg-hero-8-author-position satellites4">Art</span>
                            <span class="tg-hero-8-author-position satellites5">Private jets</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--==============================
        hero-area-end
        ==============================-->


        <!--==============================
        about-area-start
        ==============================-->
        <div id="aboutUs" class="tg-about-area pb-130 pt-150 fix p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="tg-about-title-wrap mb-60 wow img-custom-anim-left">
                            <span class="tg-section-subtitle mb-20">// know About our Agency</span>
                            <h2 class="tg-section-title">Rooted in the real economy</h2>
                            <p class="mb-70">Capital Community is the network of investors, entrepreneurs and
                                consultants, structured <br>to create and share high-level business opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tg-about-thumb mb-30 wow img-custom-anim-top">
                            <img class="w-100" src="{{ asset('assets/asset/img/aboutuspic.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tg-about-item ml-80 mb-30">
                            <h4 class="mb-15">Brand strategy</h4>
                            <p class="mb-70">Nam libero tempore, cum soluta nobis est
                                eligendi optio cumque nihil impedit</p>
                            <a href="#!" class="tg-btn-rounded">
                                <span>
                                    Learn<br> more
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7767 7.74985C15.9198 7.90198 16 8.10745 16 8.32158C16 8.5357 15.9198 8.74117 15.7767 8.89332L8.92138 16.1152C8.77516 16.2625 8.58094 16.3451 8.37867 16.3459C8.27759 16.3454 8.17746 16.3251 8.08351 16.2857C7.94489 16.2244 7.8266 16.1211 7.74358 15.989C7.66056 15.8569 7.61651 15.7019 7.61698 15.5435V9.12402H0.761697C0.559684 9.12402 0.365942 9.03948 0.223096 8.88899C0.0802502 8.73849 0 8.5344 0 8.32158C0 8.10876 0.0802502 7.90465 0.223096 7.75418C0.365942 7.60368 0.559684 7.51915 0.761697 7.51915H7.61698V1.09965C7.61651 0.941235 7.66056 0.786211 7.74358 0.654123C7.8266 0.522033 7.94489 0.418789 8.08351 0.357402C8.2242 0.29959 8.37756 0.284923 8.52585 0.3151C8.67412 0.345276 8.81125 0.419062 8.92138 0.52792L15.7767 7.74985Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <i class="tg-btn-circle-dot"></i>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="tg-about-item ml-80 mb-30">
                            <h4 class="mb-15">Make it creative</h4>
                            <p class="mb-80">Nam libero tempore, cum soluta nobis est
                                eligendi optio cumque nihil impedit</p>
                            <img class="wow img-custom-anim-top" src="assets/img/bg-2.jpg" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--==============================
        about-area-end
        ==============================-->

        <!--==============================
        values-area-area-start
        ==============================-->

        <!-- <div id="valuesarea" class="values-area bg-position pt-155 pb-160 jarallax"
            data-background="assets/img/hero/herobg.jpg">
            <div class="mask_dcc">
                <img src="assets/img/mask-dcc-1.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tg-service-2-content pt-80">
                            <span class="tg-service-2-subtitle mb-30">// Our Values</span>
                            <h2 class="tg-section-title">Our Community is a long-term project that <br>is destined to
                                last over time.</h2>
                            <div class="row pt-40">
                                <div class="col-lg-3">
                                    <p class="mb-70">We work to choose and develop Good Business, aware that great
                                        results are achieved by building on solid foundations. Our values ​​guide us in
                                        every relationship and in every operation.</p>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="ourValuesList">
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Ethics</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Transparency.</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Correctness.</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Sharing</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Vision.</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Sustainability.</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Solid foundations for
                                            extraordinary results.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--==============================
        Values-area-end
        ==============================-->


        <!--==============================
        process-area-start
        ==============================-->
        <div id="areasActivity" class="process-area tgbg-primary pt-130 pb-40">
            <div class="container">
                <div class="row gx-10">
                    <div class="col-lg-7">
                        <div class="tg-about-title-wrap mb-60  wow img-custom-anim-left">
                            <span class="tg-section-subtitle mb-20">// Areas of activity</span>
                            <h2 class="tg-section-title">The areas of activity of the Capital Community</h2>
                            <p class="mb-70">The areas of activity of the Capital community are:</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tg-chose-shape text-right mb-65">
                            <img src="{{ asset('assets/asset/img/process/shape.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item mt-60">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="65" viewBox="0 0 64 65" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.806 41.0673C32.4277 40.5049 31.5723 40.5049 31.194 41.0673L24.154 51.5335C24.0057 51.754 23.962 52.0248 24.0338 52.2782L25.8878 58.8176L24.6687 63.5086C24.5171 64.0915 24.9755 64.6562 25.6 64.6562H38.4C39.0246 64.6562 39.4828 64.0915 39.3313 63.5086L38.1122 58.8176L39.9661 52.2782C40.038 52.0249 39.9943 51.7541 39.846 51.5335L32.806 41.0673ZM26.8295 62.8091L27.6295 59.7309H36.3704L37.1704 62.8091H26.8295Z"
                                            fill="currentColor" />
                                        <path
                                            d="M0 64.6562C3.67377e-07 60.4521 0.827705 56.289 2.43586 52.4049C4.04401 48.5208 6.40111 44.9915 9.37259 42.0188C12.3441 39.046 15.8717 36.6879 19.7541 35.079C23.6366 33.4702 27.7977 32.6421 32 32.6421C36.2023 32.6421 40.3635 33.4702 44.2459 35.079C48.1283 36.6879 51.6559 39.046 54.6274 42.0188C57.5989 44.9915 59.956 48.5208 61.5641 52.4049C63.1723 56.289 64 60.4521 64 64.6562H60.16C60.16 60.9566 59.4316 57.2931 58.0164 53.8751C56.6013 50.4571 54.527 47.3514 51.9121 44.7353C49.2972 42.1193 46.1929 40.0441 42.7764 38.6282C39.3598 37.2125 35.698 36.4838 32 36.4838C28.302 36.4838 24.6402 37.2125 21.2236 38.6282C17.8071 40.0441 14.7028 42.1192 12.0879 44.7352C9.47298 47.3513 7.39873 50.4571 5.98355 53.8751C4.56838 57.2931 3.84 60.9566 3.84 64.6562H0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M64.0003 32.1744C59.8155 32.268 55.6534 31.5327 51.7516 30.0107C47.8497 28.4886 44.2846 26.2096 41.2597 23.3036C38.2347 20.3977 35.8093 16.9219 34.1219 13.0745C32.4344 9.22708 31.5179 5.08354 31.4248 0.880427L36.4305 0.768555C36.509 4.31143 37.2815 7.80409 38.7039 11.0471C40.1263 14.2901 42.1707 17.22 44.7204 19.6695C47.2702 22.1189 50.2753 24.0399 53.5642 25.3229C56.8532 26.6059 60.3615 27.2256 63.8889 27.1468L64.0003 32.1744Z"
                                            fill="currentColor" />
                                        <path
                                            d="M23 13.6338C23 19.1591 18.5228 23.6382 13 23.6382C7.47715 23.6382 3 19.1591 3 13.6338C3 8.10852 7.47715 3.62939 13 3.62939C18.5228 3.62939 23 8.10852 23 13.6338Z"
                                            fill="currentColor" />
                                        <path
                                            d="M62 8.63155C62 11.9467 59.3137 14.6342 56 14.6342C52.6863 14.6342 50 11.9467 50 8.63155C50 5.31638 52.6863 2.62891 56 2.62891C59.3137 2.62891 62 5.31638 62 8.63155Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M36.7645 58.3841H27.2352L25.4679 52.1506H25.037L26.9025 58.7303H37.0973L38.7337 52.9586H38.3028L36.7645 58.3841ZM36.4812 48.3231L31.9999 41.6609L28.446 46.9444L30.6609 44.3698L31.4547 44.9754L26.5432 52.2771L27.991 57.3836H36.0087L37.4565 52.2771L32.5451 44.9754L33.3562 44.3911L36.3134 48.2364C36.3697 48.2621 36.4257 48.2911 36.4812 48.3231ZM32.4599 52.0351C32.4599 51.8205 32.2718 51.6118 31.9999 51.6118V50.6113C32.7867 50.6113 33.4599 51.2313 33.4599 52.0351H32.4599ZM39.8459 51.5334L32.8059 41.0672C32.4276 40.5048 31.5722 40.5048 31.1939 41.0672L24.1539 51.5334C24.0056 51.7539 23.9619 52.0247 24.0337 52.2781L25.8877 58.8175L24.6686 63.5085C24.517 64.0914 24.9754 64.656 25.5999 64.656H38.3999C39.0245 64.656 39.4827 64.0914 39.3312 63.5085L38.1121 58.8175L39.966 52.2781C40.0379 52.0248 39.9942 51.754 39.8459 51.5334ZM26.8294 62.809H37.1703L36.3703 59.7308H27.6294L26.8294 62.809ZM3.35974 52.7877C1.92952 56.242 1.13651 59.9242 1.01613 63.6557H2.85715C2.97684 60.166 3.72194 56.7231 5.05967 53.4921C6.5251 49.9528 8.67301 46.7367 11.3808 44.0277C14.0885 41.3188 17.3031 39.17 20.841 37.704C24.3788 36.2378 28.1707 35.4833 32 35.4833C35.8293 35.4833 39.6212 36.2378 43.159 37.704C46.6969 39.17 49.9115 41.3188 52.6192 44.0277C55.327 46.7367 57.4749 49.9528 58.9403 53.4921C60.2781 56.7231 61.0232 60.166 61.1428 63.6557H62.9839C62.8635 59.9242 62.0705 56.242 60.6403 52.7877C59.0824 49.0249 56.7989 45.606 53.9203 42.7262C51.0417 39.8463 47.6243 37.5618 43.8632 36.0032C40.1021 34.4446 36.071 33.6425 32 33.6425C27.929 33.6425 23.8979 34.4446 20.1368 36.0032C16.3757 37.5618 12.9583 39.8462 10.0797 42.7262C7.20108 45.606 4.91763 49.0249 3.35974 52.7877ZM63.9844 63.6557C63.8637 59.7927 63.0446 55.9806 61.5641 52.4048C59.956 48.5207 57.5989 44.9915 54.6274 42.0188C51.6559 39.0459 48.1283 36.6878 44.2459 35.0789C40.3635 33.4701 36.2023 32.642 32 32.642C27.7977 32.642 23.6366 33.4701 19.7541 35.0789C15.8717 36.6878 12.3441 39.0459 9.37259 42.0188C6.40111 44.9915 4.04401 48.5207 2.43586 52.4048C0.955381 55.9806 0.136347 59.7927 0.015628 63.6557C0.0052172 63.9888 0 64.3223 0 64.6561H3.84C3.84 60.9565 4.56838 57.293 5.98355 53.875C7.39873 50.457 9.47298 47.3512 12.0879 44.7352C14.7028 42.1191 17.8071 40.044 21.2236 38.6282C24.6402 37.2124 28.302 36.4837 32 36.4837C35.698 36.4837 39.3598 37.2124 42.7764 38.6282C46.1929 40.044 49.2972 42.1192 51.9121 44.7353C54.527 47.3513 56.6013 50.457 58.0164 53.875C59.4316 57.293 60.16 60.9565 60.16 64.6561H64C64 64.3223 63.9948 63.9888 63.9844 63.6557ZM52.1145 29.0785C55.5827 30.4314 59.263 31.1425 62.9777 31.1804L62.9106 28.1513C59.5899 28.1058 56.3012 27.4645 53.2007 26.255C49.789 24.9242 46.672 22.9315 44.0275 20.3911C41.383 17.8506 39.2629 14.8121 37.7878 11.4491C36.4469 8.39169 35.663 5.12043 35.4704 1.7907L32.4625 1.85793C32.665 5.58647 33.5364 9.25045 35.0373 12.6725C36.6721 16.3999 39.0218 19.7671 41.952 22.582C44.8821 25.3969 48.3354 27.6044 52.1145 29.0785ZM31.4245 0.880427C31.4246 0.884168 31.4247 0.887909 31.4248 0.89165C31.4322 1.2216 31.4447 1.55118 31.4622 1.88028C31.668 5.73961 32.5681 9.53253 34.1216 13.0745C35.809 16.9219 38.2344 20.3977 41.2594 23.3036C44.2843 26.2096 47.8494 28.4886 51.7513 30.0107C55.3421 31.4114 59.1534 32.1458 62.9999 32.181C63.3292 32.184 63.6588 32.1819 63.9885 32.1747C63.9924 32.1746 63.9962 32.1745 64 32.1744L63.8886 27.1468C63.8854 27.1469 63.8823 27.147 63.8792 27.147C60.3549 27.2245 56.8499 26.6048 53.5639 25.3229C50.275 24.0399 47.2699 22.1189 44.7201 19.6695C42.1704 17.22 40.126 14.2901 38.7036 11.0471C37.2825 7.807 36.5101 4.3177 36.4304 0.778094C36.4303 0.774915 36.4303 0.771735 36.4302 0.768555L31.4245 0.880427ZM12.9999 22.6376C17.9704 22.6376 21.9999 18.6063 21.9999 13.6336C21.9999 8.66085 17.9704 4.62964 12.9999 4.62964C8.02931 4.62964 3.99988 8.66085 3.99988 13.6336C3.99988 18.6063 8.02931 22.6376 12.9999 22.6376ZM55.9999 13.6336C58.7613 13.6336 60.9999 11.394 60.9999 8.6314C60.9999 5.86875 58.7613 3.6292 55.9999 3.6292C53.2385 3.6292 50.9999 5.86875 50.9999 8.6314C50.9999 11.394 53.2385 13.6336 55.9999 13.6336ZM22.9999 13.6336C22.9999 19.1589 18.5227 23.638 12.9999 23.638C7.47703 23.638 2.99988 19.1589 2.99988 13.6336C2.99988 8.10832 7.47703 3.6292 12.9999 3.6292C18.5227 3.6292 22.9999 8.10832 22.9999 13.6336ZM55.9999 14.6341C59.3136 14.6341 61.9999 11.9466 61.9999 8.6314C61.9999 5.31623 59.3136 2.62876 55.9999 2.62876C52.6862 2.62876 49.9999 5.31623 49.9999 8.6314C49.9999 11.9466 52.6862 14.6341 55.9999 14.6341Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="count">01</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Sell ​​& Buy of Professional Studies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_492)">
                                            <path
                                                d="M59.3333 16H4.66667C2.09333 16 0 13.9067 0 11.3333V4.66667C0 2.09333 2.09333 0 4.66667 0H59.3333C61.9067 0 64 2.09333 64 4.66667V11.3333C64 13.9067 61.9067 16 59.3333 16ZM4.66667 4C4.29867 4 4 4.29867 4 4.66667V11.3333C4 11.7013 4.29867 12 4.66667 12H59.3333C59.7013 12 60 11.7013 60 11.3333V4.66667C60 4.29867 59.7013 4 59.3333 4H4.66667Z"
                                                fill="currentColor" />
                                            <path
                                                d="M59.333 63.9997H25.9997C23.4264 63.9997 21.333 61.9064 21.333 59.333V25.9997C21.333 23.4264 23.4264 21.333 25.9997 21.333H59.333C61.9064 21.333 63.9997 23.4264 63.9997 25.9997V59.333C63.9997 61.9064 61.9064 63.9997 59.333 63.9997ZM25.9997 25.333C25.6317 25.333 25.333 25.6317 25.333 25.9997V59.333C25.333 59.701 25.6317 59.9997 25.9997 59.9997H59.333C59.701 59.9997 59.9997 59.701 59.9997 59.333V25.9997C59.9997 25.6317 59.701 25.333 59.333 25.333H25.9997Z"
                                                fill="currentColor" />
                                            <path
                                                d="M52.8756 42.7L47.7713 37.5957C47.6125 37.4369 47.3317 37.4369 47.173 37.5957L46.0663 38.7023C45.9011 38.8676 45.9011 39.1355 46.0663 39.3008L49.765 42.999L46.0666 46.6979C45.9013 46.8632 45.9013 47.1311 46.0666 47.2964L47.1732 48.403C47.2525 48.4824 47.3603 48.5273 47.4724 48.5273C47.5844 48.5273 47.6923 48.4824 47.7717 48.403L52.8756 43.2989C53.0409 43.1334 53.0409 42.8653 52.8756 42.7Z"
                                                fill="currentColor" />
                                            <path
                                                d="M39.9329 46.6975L36.2348 42.9991L39.9335 39.3008C40.0129 39.2214 40.0575 39.1139 40.0575 39.0016C40.0575 38.8894 40.0131 38.7817 39.9335 38.7023L38.8269 37.5957C38.7475 37.5163 38.6398 37.4717 38.5276 37.4717C38.4155 37.4717 38.3077 37.5163 38.2284 37.5957L33.1238 42.6996C32.9586 42.8649 32.9586 43.1328 33.1238 43.2983L38.2282 48.4024C38.3075 48.4818 38.4153 48.5267 38.5274 48.5267C38.6396 48.5267 38.7473 48.4818 38.8267 48.4024L39.9333 47.2958C40.0986 47.1307 40.0986 46.8628 39.9329 46.6975Z"
                                                fill="currentColor" />
                                            <path
                                                d="M45.9025 35.878C45.8488 35.7794 45.7582 35.7061 45.6507 35.6744L44.7536 35.4096C44.5297 35.3432 44.2939 35.4717 44.2279 35.6958L40.0632 49.7995C40.0314 49.9072 40.0437 50.023 40.0973 50.1214C40.1508 50.2202 40.2416 50.2932 40.3491 50.3252L41.2462 50.59C41.2862 50.6018 41.3266 50.6075 41.3662 50.6075C41.5488 50.6075 41.7175 50.4882 41.7719 50.3038L45.9366 36.1999C45.9683 36.0922 45.9563 35.9764 45.9025 35.878Z"
                                                fill="currentColor" />
                                            <path
                                                d="M8 64C3.58933 64 0 60.4107 0 56C0 51.5893 3.58933 48 8 48C12.4107 48 16 51.5893 16 56C16 60.4107 12.4107 64 8 64ZM8 52C5.79467 52 4 53.7947 4 56C4 58.2053 5.79467 60 8 60C10.2053 60 12 58.2053 12 56C12 53.7947 10.2053 52 8 52Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 34.6665H2C0.896 34.6665 0 33.7705 0 32.6665C0 31.5625 0.896 30.6665 2 30.6665H14C15.104 30.6665 16 31.5625 16 32.6665C16 33.7705 15.104 34.6665 14 34.6665Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 26.6665H2C0.896 26.6665 0 25.7705 0 24.6665C0 23.5625 0.896 22.6665 2 22.6665H14C15.104 22.6665 16 23.5625 16 24.6665C16 25.7705 15.104 26.6665 14 26.6665Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 42.6665H2C0.896 42.6665 0 41.7705 0 40.6665C0 39.5625 0.896 38.6665 2 38.6665H14C15.104 38.6665 16 39.5625 16 40.6665C16 41.7705 15.104 42.6665 14 42.6665Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_71_492">
                                                <rect width="64" height="64" fill="currentColor" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="count">02</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Sell ​​& Buy of companies and company shares</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item mt-60">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 49.4655C0 48.5735 0.723231 47.8503 1.61525 47.8503C2.50726 47.8503 3.23049 48.5735 3.23049 49.4655V60.5542C3.23049 60.6729 3.32714 60.7695 3.44577 60.7695H14.5345C15.4265 60.7695 16.1497 61.4927 16.1497 62.3848C16.1497 63.2768 15.4265 64 14.5345 64H1.61525C0.723231 64 0 63.2768 0 62.3848V49.4655ZM23.1379 45.0618V23.4166C23.1379 23.298 23.2345 23.2013 23.3532 23.2013H44.9983C45.117 23.2013 45.2136 23.298 45.2136 23.4166V45.0618C45.2136 45.1804 45.117 45.2771 44.9983 45.2771H23.3532C23.2345 45.2771 23.1379 45.1804 23.1379 45.0618ZM50.1915 33.1724L49.7561 33.1207C49.6929 33.1131 49.6355 33.1312 49.5878 33.1736C49.5402 33.216 49.5155 33.2709 49.5155 33.3346V48.4281C49.5155 49.0638 49.0004 49.5791 48.3644 49.5791H33.2709C33.2073 49.5791 33.1523 49.6039 33.1099 49.6515C33.0676 49.6991 33.0495 49.7566 33.057 49.8198L33.1088 50.2552C33.5148 53.6799 35.0632 56.8543 37.5008 59.2919C40.391 62.1821 44.2765 63.7916 48.3644 63.7916C52.4523 63.7916 56.3378 62.1821 59.228 59.2919C62.1182 56.4017 63.7277 52.5162 63.7277 48.4283C63.7277 44.3404 62.1182 40.4549 59.228 37.5647C56.7906 35.1269 53.6164 33.5783 50.1915 33.1724ZM18.6206 30.763C18.7392 30.763 18.8358 30.6663 18.8358 30.5477V20.0505C18.8358 19.4148 19.3509 18.8995 19.9866 18.8995H26.3849C26.4616 18.8995 26.5276 18.8626 26.5681 18.7974C26.6086 18.7321 26.6118 18.6565 26.5775 18.5878L18.1973 1.82732C18.16 1.75243 18.0883 1.70846 18.0047 1.70846C17.9212 1.70846 17.8495 1.75266 17.8121 1.82732L3.50027 30.4513C3.46592 30.52 3.46936 30.5953 3.50966 30.6608C3.54997 30.7261 3.61593 30.763 3.69288 30.763H18.6206ZM64.0005 14.5345C64.0005 15.4265 63.2772 16.1497 62.3852 16.1497C61.4932 16.1497 60.77 15.4265 60.77 14.5345V3.44577C60.77 3.32714 60.6733 3.23049 60.5547 3.23049H49.466C48.574 3.23049 47.8507 2.50726 47.8507 1.61525C47.8507 0.723231 48.574 0 49.466 0H62.3852C63.2772 0 64.0005 0.723231 64.0005 1.61525V14.5345Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="count">03</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Equity / Private Debt Participations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_514)">
                                            <path
                                                d="M45.7139 3.04738C45.7139 1.92528 46.6235 1.01562 47.7456 1.01562H61.9679C63.09 1.01562 63.9996 1.92528 63.9996 3.04738V17.2696C63.9996 18.3917 63.09 19.3014 61.9679 19.3014H45.7139V3.04738Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M61.9679 2.07953H47.7456C47.2111 2.07953 46.7778 2.51285 46.7778 3.04738V18.2375H61.9679C62.5024 18.2375 62.9357 17.8042 62.9357 17.2696V3.04738C62.9357 2.51285 62.5024 2.07953 61.9679 2.07953ZM47.7456 1.01562C46.6235 1.01562 45.7139 1.92528 45.7139 3.04738V19.3014H61.9679C63.09 19.3014 63.9996 18.3917 63.9996 17.2696V3.04738C63.9996 1.92528 63.09 1.01562 61.9679 1.01562H47.7456Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M45.7147 19.3015H20.3179C19.7568 19.3015 19.302 19.7563 19.302 20.3174V45.7142H45.7147V19.3015ZM20.3179 18.2856C19.1958 18.2856 18.2861 19.1953 18.2861 20.3174V46.7301H46.7306V18.2856H20.3179Z"
                                                fill="currentColor" />
                                            <path
                                                d="M1.01562 47.7461C1.01562 46.624 1.92528 45.7144 3.04738 45.7144H19.3014V61.9684C19.3014 63.0905 18.3917 64.0001 17.2696 64.0001H3.04738C1.92528 64.0001 1.01562 63.0905 1.01562 61.9684V47.7461Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.2375 46.7783H3.04738C2.51285 46.7783 2.07953 47.2116 2.07953 47.7461V61.9684C2.07953 62.5029 2.51285 62.9362 3.04738 62.9362H17.2696C17.8042 62.9362 18.2375 62.5029 18.2375 61.9684V46.7783ZM3.04738 45.7144C1.92528 45.7144 1.01562 46.624 1.01562 47.7461V61.9684C1.01562 63.0905 1.92528 64.0001 3.04738 64.0001H17.2696C18.3917 64.0001 19.3014 63.0905 19.3014 61.9684V45.7144H3.04738Z"
                                                fill="currentColor" />
                                            <path
                                                d="M45.7139 45.7144H61.9679C63.09 45.7144 63.9996 46.624 63.9996 47.7461V61.9684C63.9996 63.0905 63.09 64.0001 61.9679 64.0001H47.7456C46.6235 64.0001 45.7139 63.0905 45.7139 61.9684V45.7144Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M61.9679 46.7783H46.7778V61.9684C46.7778 62.5029 47.2111 62.9362 47.7456 62.9362H61.9679C62.5024 62.9362 62.9357 62.5029 62.9357 61.9684V47.7461C62.9357 47.2116 62.5024 46.7783 61.9679 46.7783ZM45.7139 45.7144V61.9684C45.7139 63.0905 46.6235 64.0001 47.7456 64.0001H61.9679C63.09 64.0001 63.9996 63.0905 63.9996 61.9684V47.7461C63.9996 46.624 63.09 45.7144 61.9679 45.7144H45.7139Z"
                                                fill="currentColor" />
                                            <path
                                                d="M0 2.03175C0 0.909646 0.909644 0 2.03175 0H16.3729C18.1829 0 19.0894 2.18848 17.8095 3.46841L3.46841 17.8095C2.18848 19.0894 0 18.1829 0 16.3729V2.03175Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.3729 1.18211H2.03175C1.56251 1.18211 1.18211 1.5625 1.18211 2.03175V16.3729C1.18211 17.1298 2.09729 17.5089 2.63253 16.9736L16.9736 2.63253C17.5089 2.09729 17.1298 1.18211 16.3729 1.18211ZM2.03175 0C0.909644 0 0 0.909646 0 2.03175V16.3729C0 18.1829 2.18848 19.0894 3.46841 17.8095L17.8095 3.46841C19.0894 2.18848 18.1829 0 16.3729 0H2.03175Z"
                                                fill="currentColor" />
                                            <path
                                                d="M31.1453 38.5718C30.5455 38.4301 30.1728 37.8177 30.3094 37.2022L32.5365 27.2996C32.6761 26.6857 33.2744 26.2972 33.8713 26.4434C34.4711 26.5851 34.8438 27.1976 34.7072 27.813L32.4801 37.7156C32.3391 38.3463 31.7229 38.7166 31.1453 38.5718Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M34.7072 27.813L32.4801 37.7156C32.3391 38.3463 31.7229 38.7166 31.1453 38.5718C30.5455 38.4301 30.1728 37.8177 30.3094 37.2022L32.5365 27.2996C32.6761 26.6857 33.2744 26.2972 33.8713 26.4434C34.4711 26.5851 34.8438 27.1976 34.7072 27.813Z"
                                                fill="currentColor" />
                                            <path
                                                d="M37.3329 37.0793C37.0285 37.0793 36.7256 36.9514 36.5044 36.7015C36.0931 36.2308 36.1303 35.5102 36.5876 35.0866L39.3804 32.5089L36.5876 29.9312C36.1303 29.5092 36.0931 28.7871 36.5044 28.3163C36.9172 27.8471 37.6209 27.8105 38.0782 28.231L41.7901 31.6588C42.0247 31.8767 42.1583 32.1844 42.1583 32.5089C42.1583 32.8334 42.0247 33.1412 41.7901 33.359L38.0782 36.7868C37.8644 36.9834 37.5987 37.0793 37.3329 37.0793Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M36.5876 35.0866C36.1303 35.5102 36.0931 36.2308 36.5044 36.7015C36.7256 36.9514 37.0285 37.0793 37.3329 37.0793C37.5987 37.0793 37.8644 36.9834 38.0782 36.7868L41.7901 33.359C42.0247 33.1412 42.1583 32.8334 42.1583 32.5089C42.1583 32.1844 42.0247 31.8767 41.7901 31.6588L38.0782 28.231C37.6209 27.8105 36.9172 27.8471 36.5044 28.3163C36.0931 28.7871 36.1303 29.5092 36.5876 29.9312L39.3804 32.5089L36.5876 35.0866Z"
                                                fill="currentColor" />
                                            <path
                                                d="M27.6828 37.0789C27.4171 37.0789 27.1513 36.9829 26.9375 36.7864L23.2257 33.3585C22.9911 33.1407 22.8574 32.8329 22.8574 32.5084C22.8574 32.1839 22.9911 31.8762 23.2257 31.6583L26.9375 28.2305C27.3948 27.81 28.0986 27.8481 28.5113 28.3158C28.9226 28.7866 28.8855 29.5072 28.4282 29.9307L25.6354 32.5084L28.4282 35.0862C28.8855 35.5082 28.9226 36.2303 28.5113 36.701C28.2901 36.9509 27.9872 37.0789 27.6828 37.0789Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M25.6354 32.5084L28.4282 35.0862C28.8855 35.5082 28.9226 36.2303 28.5113 36.701C28.2901 36.9509 27.9872 37.0789 27.6828 37.0789C27.4171 37.0789 27.1513 36.9829 26.9375 36.7864L23.2257 33.3585C22.9911 33.1407 22.8574 32.8329 22.8574 32.5084C22.8574 32.1839 22.9911 31.8762 23.2257 31.6583L26.9375 28.2305C27.3948 27.81 28.0986 27.8481 28.5113 28.3158C28.9226 28.7866 28.8855 29.5072 28.4282 29.9307L25.6354 32.5084Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_71_514">
                                                <rect width="64" height="64" fill="currentColor" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="count">04</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Internationalization</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item mt-60">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="65" viewBox="0 0 64 65" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.806 41.0673C32.4277 40.5049 31.5723 40.5049 31.194 41.0673L24.154 51.5335C24.0057 51.754 23.962 52.0248 24.0338 52.2782L25.8878 58.8176L24.6687 63.5086C24.5171 64.0915 24.9755 64.6562 25.6 64.6562H38.4C39.0246 64.6562 39.4828 64.0915 39.3313 63.5086L38.1122 58.8176L39.9661 52.2782C40.038 52.0249 39.9943 51.7541 39.846 51.5335L32.806 41.0673ZM26.8295 62.8091L27.6295 59.7309H36.3704L37.1704 62.8091H26.8295Z"
                                            fill="currentColor" />
                                        <path
                                            d="M0 64.6562C3.67377e-07 60.4521 0.827705 56.289 2.43586 52.4049C4.04401 48.5208 6.40111 44.9915 9.37259 42.0188C12.3441 39.046 15.8717 36.6879 19.7541 35.079C23.6366 33.4702 27.7977 32.6421 32 32.6421C36.2023 32.6421 40.3635 33.4702 44.2459 35.079C48.1283 36.6879 51.6559 39.046 54.6274 42.0188C57.5989 44.9915 59.956 48.5208 61.5641 52.4049C63.1723 56.289 64 60.4521 64 64.6562H60.16C60.16 60.9566 59.4316 57.2931 58.0164 53.8751C56.6013 50.4571 54.527 47.3514 51.9121 44.7353C49.2972 42.1193 46.1929 40.0441 42.7764 38.6282C39.3598 37.2125 35.698 36.4838 32 36.4838C28.302 36.4838 24.6402 37.2125 21.2236 38.6282C17.8071 40.0441 14.7028 42.1192 12.0879 44.7352C9.47298 47.3513 7.39873 50.4571 5.98355 53.8751C4.56838 57.2931 3.84 60.9566 3.84 64.6562H0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M64.0003 32.1744C59.8155 32.268 55.6534 31.5327 51.7516 30.0107C47.8497 28.4886 44.2846 26.2096 41.2597 23.3036C38.2347 20.3977 35.8093 16.9219 34.1219 13.0745C32.4344 9.22708 31.5179 5.08354 31.4248 0.880427L36.4305 0.768555C36.509 4.31143 37.2815 7.80409 38.7039 11.0471C40.1263 14.2901 42.1707 17.22 44.7204 19.6695C47.2702 22.1189 50.2753 24.0399 53.5642 25.3229C56.8532 26.6059 60.3615 27.2256 63.8889 27.1468L64.0003 32.1744Z"
                                            fill="currentColor" />
                                        <path
                                            d="M23 13.6338C23 19.1591 18.5228 23.6382 13 23.6382C7.47715 23.6382 3 19.1591 3 13.6338C3 8.10852 7.47715 3.62939 13 3.62939C18.5228 3.62939 23 8.10852 23 13.6338Z"
                                            fill="currentColor" />
                                        <path
                                            d="M62 8.63155C62 11.9467 59.3137 14.6342 56 14.6342C52.6863 14.6342 50 11.9467 50 8.63155C50 5.31638 52.6863 2.62891 56 2.62891C59.3137 2.62891 62 5.31638 62 8.63155Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M36.7645 58.3841H27.2352L25.4679 52.1506H25.037L26.9025 58.7303H37.0973L38.7337 52.9586H38.3028L36.7645 58.3841ZM36.4812 48.3231L31.9999 41.6609L28.446 46.9444L30.6609 44.3698L31.4547 44.9754L26.5432 52.2771L27.991 57.3836H36.0087L37.4565 52.2771L32.5451 44.9754L33.3562 44.3911L36.3134 48.2364C36.3697 48.2621 36.4257 48.2911 36.4812 48.3231ZM32.4599 52.0351C32.4599 51.8205 32.2718 51.6118 31.9999 51.6118V50.6113C32.7867 50.6113 33.4599 51.2313 33.4599 52.0351H32.4599ZM39.8459 51.5334L32.8059 41.0672C32.4276 40.5048 31.5722 40.5048 31.1939 41.0672L24.1539 51.5334C24.0056 51.7539 23.9619 52.0247 24.0337 52.2781L25.8877 58.8175L24.6686 63.5085C24.517 64.0914 24.9754 64.656 25.5999 64.656H38.3999C39.0245 64.656 39.4827 64.0914 39.3312 63.5085L38.1121 58.8175L39.966 52.2781C40.0379 52.0248 39.9942 51.754 39.8459 51.5334ZM26.8294 62.809H37.1703L36.3703 59.7308H27.6294L26.8294 62.809ZM3.35974 52.7877C1.92952 56.242 1.13651 59.9242 1.01613 63.6557H2.85715C2.97684 60.166 3.72194 56.7231 5.05967 53.4921C6.5251 49.9528 8.67301 46.7367 11.3808 44.0277C14.0885 41.3188 17.3031 39.17 20.841 37.704C24.3788 36.2378 28.1707 35.4833 32 35.4833C35.8293 35.4833 39.6212 36.2378 43.159 37.704C46.6969 39.17 49.9115 41.3188 52.6192 44.0277C55.327 46.7367 57.4749 49.9528 58.9403 53.4921C60.2781 56.7231 61.0232 60.166 61.1428 63.6557H62.9839C62.8635 59.9242 62.0705 56.242 60.6403 52.7877C59.0824 49.0249 56.7989 45.606 53.9203 42.7262C51.0417 39.8463 47.6243 37.5618 43.8632 36.0032C40.1021 34.4446 36.071 33.6425 32 33.6425C27.929 33.6425 23.8979 34.4446 20.1368 36.0032C16.3757 37.5618 12.9583 39.8462 10.0797 42.7262C7.20108 45.606 4.91763 49.0249 3.35974 52.7877ZM63.9844 63.6557C63.8637 59.7927 63.0446 55.9806 61.5641 52.4048C59.956 48.5207 57.5989 44.9915 54.6274 42.0188C51.6559 39.0459 48.1283 36.6878 44.2459 35.0789C40.3635 33.4701 36.2023 32.642 32 32.642C27.7977 32.642 23.6366 33.4701 19.7541 35.0789C15.8717 36.6878 12.3441 39.0459 9.37259 42.0188C6.40111 44.9915 4.04401 48.5207 2.43586 52.4048C0.955381 55.9806 0.136347 59.7927 0.015628 63.6557C0.0052172 63.9888 0 64.3223 0 64.6561H3.84C3.84 60.9565 4.56838 57.293 5.98355 53.875C7.39873 50.457 9.47298 47.3512 12.0879 44.7352C14.7028 42.1191 17.8071 40.044 21.2236 38.6282C24.6402 37.2124 28.302 36.4837 32 36.4837C35.698 36.4837 39.3598 37.2124 42.7764 38.6282C46.1929 40.044 49.2972 42.1192 51.9121 44.7353C54.527 47.3513 56.6013 50.457 58.0164 53.875C59.4316 57.293 60.16 60.9565 60.16 64.6561H64C64 64.3223 63.9948 63.9888 63.9844 63.6557ZM52.1145 29.0785C55.5827 30.4314 59.263 31.1425 62.9777 31.1804L62.9106 28.1513C59.5899 28.1058 56.3012 27.4645 53.2007 26.255C49.789 24.9242 46.672 22.9315 44.0275 20.3911C41.383 17.8506 39.2629 14.8121 37.7878 11.4491C36.4469 8.39169 35.663 5.12043 35.4704 1.7907L32.4625 1.85793C32.665 5.58647 33.5364 9.25045 35.0373 12.6725C36.6721 16.3999 39.0218 19.7671 41.952 22.582C44.8821 25.3969 48.3354 27.6044 52.1145 29.0785ZM31.4245 0.880427C31.4246 0.884168 31.4247 0.887909 31.4248 0.89165C31.4322 1.2216 31.4447 1.55118 31.4622 1.88028C31.668 5.73961 32.5681 9.53253 34.1216 13.0745C35.809 16.9219 38.2344 20.3977 41.2594 23.3036C44.2843 26.2096 47.8494 28.4886 51.7513 30.0107C55.3421 31.4114 59.1534 32.1458 62.9999 32.181C63.3292 32.184 63.6588 32.1819 63.9885 32.1747C63.9924 32.1746 63.9962 32.1745 64 32.1744L63.8886 27.1468C63.8854 27.1469 63.8823 27.147 63.8792 27.147C60.3549 27.2245 56.8499 26.6048 53.5639 25.3229C50.275 24.0399 47.2699 22.1189 44.7201 19.6695C42.1704 17.22 40.126 14.2901 38.7036 11.0471C37.2825 7.807 36.5101 4.3177 36.4304 0.778094C36.4303 0.774915 36.4303 0.771735 36.4302 0.768555L31.4245 0.880427ZM12.9999 22.6376C17.9704 22.6376 21.9999 18.6063 21.9999 13.6336C21.9999 8.66085 17.9704 4.62964 12.9999 4.62964C8.02931 4.62964 3.99988 8.66085 3.99988 13.6336C3.99988 18.6063 8.02931 22.6376 12.9999 22.6376ZM55.9999 13.6336C58.7613 13.6336 60.9999 11.394 60.9999 8.6314C60.9999 5.86875 58.7613 3.6292 55.9999 3.6292C53.2385 3.6292 50.9999 5.86875 50.9999 8.6314C50.9999 11.394 53.2385 13.6336 55.9999 13.6336ZM22.9999 13.6336C22.9999 19.1589 18.5227 23.638 12.9999 23.638C7.47703 23.638 2.99988 19.1589 2.99988 13.6336C2.99988 8.10832 7.47703 3.6292 12.9999 3.6292C18.5227 3.6292 22.9999 8.10832 22.9999 13.6336ZM55.9999 14.6341C59.3136 14.6341 61.9999 11.9466 61.9999 8.6314C61.9999 5.31623 59.3136 2.62876 55.9999 2.62876C52.6862 2.62876 49.9999 5.31623 49.9999 8.6314C49.9999 11.9466 52.6862 14.6341 55.9999 14.6341Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="count">01</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Sell ​​& Buy of Professional Studies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_492)">
                                            <path
                                                d="M59.3333 16H4.66667C2.09333 16 0 13.9067 0 11.3333V4.66667C0 2.09333 2.09333 0 4.66667 0H59.3333C61.9067 0 64 2.09333 64 4.66667V11.3333C64 13.9067 61.9067 16 59.3333 16ZM4.66667 4C4.29867 4 4 4.29867 4 4.66667V11.3333C4 11.7013 4.29867 12 4.66667 12H59.3333C59.7013 12 60 11.7013 60 11.3333V4.66667C60 4.29867 59.7013 4 59.3333 4H4.66667Z"
                                                fill="currentColor" />
                                            <path
                                                d="M59.333 63.9997H25.9997C23.4264 63.9997 21.333 61.9064 21.333 59.333V25.9997C21.333 23.4264 23.4264 21.333 25.9997 21.333H59.333C61.9064 21.333 63.9997 23.4264 63.9997 25.9997V59.333C63.9997 61.9064 61.9064 63.9997 59.333 63.9997ZM25.9997 25.333C25.6317 25.333 25.333 25.6317 25.333 25.9997V59.333C25.333 59.701 25.6317 59.9997 25.9997 59.9997H59.333C59.701 59.9997 59.9997 59.701 59.9997 59.333V25.9997C59.9997 25.6317 59.701 25.333 59.333 25.333H25.9997Z"
                                                fill="currentColor" />
                                            <path
                                                d="M52.8756 42.7L47.7713 37.5957C47.6125 37.4369 47.3317 37.4369 47.173 37.5957L46.0663 38.7023C45.9011 38.8676 45.9011 39.1355 46.0663 39.3008L49.765 42.999L46.0666 46.6979C45.9013 46.8632 45.9013 47.1311 46.0666 47.2964L47.1732 48.403C47.2525 48.4824 47.3603 48.5273 47.4724 48.5273C47.5844 48.5273 47.6923 48.4824 47.7717 48.403L52.8756 43.2989C53.0409 43.1334 53.0409 42.8653 52.8756 42.7Z"
                                                fill="currentColor" />
                                            <path
                                                d="M39.9329 46.6975L36.2348 42.9991L39.9335 39.3008C40.0129 39.2214 40.0575 39.1139 40.0575 39.0016C40.0575 38.8894 40.0131 38.7817 39.9335 38.7023L38.8269 37.5957C38.7475 37.5163 38.6398 37.4717 38.5276 37.4717C38.4155 37.4717 38.3077 37.5163 38.2284 37.5957L33.1238 42.6996C32.9586 42.8649 32.9586 43.1328 33.1238 43.2983L38.2282 48.4024C38.3075 48.4818 38.4153 48.5267 38.5274 48.5267C38.6396 48.5267 38.7473 48.4818 38.8267 48.4024L39.9333 47.2958C40.0986 47.1307 40.0986 46.8628 39.9329 46.6975Z"
                                                fill="currentColor" />
                                            <path
                                                d="M45.9025 35.878C45.8488 35.7794 45.7582 35.7061 45.6507 35.6744L44.7536 35.4096C44.5297 35.3432 44.2939 35.4717 44.2279 35.6958L40.0632 49.7995C40.0314 49.9072 40.0437 50.023 40.0973 50.1214C40.1508 50.2202 40.2416 50.2932 40.3491 50.3252L41.2462 50.59C41.2862 50.6018 41.3266 50.6075 41.3662 50.6075C41.5488 50.6075 41.7175 50.4882 41.7719 50.3038L45.9366 36.1999C45.9683 36.0922 45.9563 35.9764 45.9025 35.878Z"
                                                fill="currentColor" />
                                            <path
                                                d="M8 64C3.58933 64 0 60.4107 0 56C0 51.5893 3.58933 48 8 48C12.4107 48 16 51.5893 16 56C16 60.4107 12.4107 64 8 64ZM8 52C5.79467 52 4 53.7947 4 56C4 58.2053 5.79467 60 8 60C10.2053 60 12 58.2053 12 56C12 53.7947 10.2053 52 8 52Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 34.6665H2C0.896 34.6665 0 33.7705 0 32.6665C0 31.5625 0.896 30.6665 2 30.6665H14C15.104 30.6665 16 31.5625 16 32.6665C16 33.7705 15.104 34.6665 14 34.6665Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 26.6665H2C0.896 26.6665 0 25.7705 0 24.6665C0 23.5625 0.896 22.6665 2 22.6665H14C15.104 22.6665 16 23.5625 16 24.6665C16 25.7705 15.104 26.6665 14 26.6665Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 42.6665H2C0.896 42.6665 0 41.7705 0 40.6665C0 39.5625 0.896 38.6665 2 38.6665H14C15.104 38.6665 16 39.5625 16 40.6665C16 41.7705 15.104 42.6665 14 42.6665Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_71_492">
                                                <rect width="64" height="64" fill="currentColor" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="count">02</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Sell ​​& Buy of companies and company shares</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item mt-60">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 49.4655C0 48.5735 0.723231 47.8503 1.61525 47.8503C2.50726 47.8503 3.23049 48.5735 3.23049 49.4655V60.5542C3.23049 60.6729 3.32714 60.7695 3.44577 60.7695H14.5345C15.4265 60.7695 16.1497 61.4927 16.1497 62.3848C16.1497 63.2768 15.4265 64 14.5345 64H1.61525C0.723231 64 0 63.2768 0 62.3848V49.4655ZM23.1379 45.0618V23.4166C23.1379 23.298 23.2345 23.2013 23.3532 23.2013H44.9983C45.117 23.2013 45.2136 23.298 45.2136 23.4166V45.0618C45.2136 45.1804 45.117 45.2771 44.9983 45.2771H23.3532C23.2345 45.2771 23.1379 45.1804 23.1379 45.0618ZM50.1915 33.1724L49.7561 33.1207C49.6929 33.1131 49.6355 33.1312 49.5878 33.1736C49.5402 33.216 49.5155 33.2709 49.5155 33.3346V48.4281C49.5155 49.0638 49.0004 49.5791 48.3644 49.5791H33.2709C33.2073 49.5791 33.1523 49.6039 33.1099 49.6515C33.0676 49.6991 33.0495 49.7566 33.057 49.8198L33.1088 50.2552C33.5148 53.6799 35.0632 56.8543 37.5008 59.2919C40.391 62.1821 44.2765 63.7916 48.3644 63.7916C52.4523 63.7916 56.3378 62.1821 59.228 59.2919C62.1182 56.4017 63.7277 52.5162 63.7277 48.4283C63.7277 44.3404 62.1182 40.4549 59.228 37.5647C56.7906 35.1269 53.6164 33.5783 50.1915 33.1724ZM18.6206 30.763C18.7392 30.763 18.8358 30.6663 18.8358 30.5477V20.0505C18.8358 19.4148 19.3509 18.8995 19.9866 18.8995H26.3849C26.4616 18.8995 26.5276 18.8626 26.5681 18.7974C26.6086 18.7321 26.6118 18.6565 26.5775 18.5878L18.1973 1.82732C18.16 1.75243 18.0883 1.70846 18.0047 1.70846C17.9212 1.70846 17.8495 1.75266 17.8121 1.82732L3.50027 30.4513C3.46592 30.52 3.46936 30.5953 3.50966 30.6608C3.54997 30.7261 3.61593 30.763 3.69288 30.763H18.6206ZM64.0005 14.5345C64.0005 15.4265 63.2772 16.1497 62.3852 16.1497C61.4932 16.1497 60.77 15.4265 60.77 14.5345V3.44577C60.77 3.32714 60.6733 3.23049 60.5547 3.23049H49.466C48.574 3.23049 47.8507 2.50726 47.8507 1.61525C47.8507 0.723231 48.574 0 49.466 0H62.3852C63.2772 0 64.0005 0.723231 64.0005 1.61525V14.5345Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="count">03</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Equity / Private Debt Participations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="tg-process-item">
                            <div class="tg-process-icon mb-65 d-flex justify-content-between align-items-start">
                                <span class="d-inline-block">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_514)">
                                            <path
                                                d="M45.7139 3.04738C45.7139 1.92528 46.6235 1.01562 47.7456 1.01562H61.9679C63.09 1.01562 63.9996 1.92528 63.9996 3.04738V17.2696C63.9996 18.3917 63.09 19.3014 61.9679 19.3014H45.7139V3.04738Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M61.9679 2.07953H47.7456C47.2111 2.07953 46.7778 2.51285 46.7778 3.04738V18.2375H61.9679C62.5024 18.2375 62.9357 17.8042 62.9357 17.2696V3.04738C62.9357 2.51285 62.5024 2.07953 61.9679 2.07953ZM47.7456 1.01562C46.6235 1.01562 45.7139 1.92528 45.7139 3.04738V19.3014H61.9679C63.09 19.3014 63.9996 18.3917 63.9996 17.2696V3.04738C63.9996 1.92528 63.09 1.01562 61.9679 1.01562H47.7456Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M45.7147 19.3015H20.3179C19.7568 19.3015 19.302 19.7563 19.302 20.3174V45.7142H45.7147V19.3015ZM20.3179 18.2856C19.1958 18.2856 18.2861 19.1953 18.2861 20.3174V46.7301H46.7306V18.2856H20.3179Z"
                                                fill="currentColor" />
                                            <path
                                                d="M1.01562 47.7461C1.01562 46.624 1.92528 45.7144 3.04738 45.7144H19.3014V61.9684C19.3014 63.0905 18.3917 64.0001 17.2696 64.0001H3.04738C1.92528 64.0001 1.01562 63.0905 1.01562 61.9684V47.7461Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.2375 46.7783H3.04738C2.51285 46.7783 2.07953 47.2116 2.07953 47.7461V61.9684C2.07953 62.5029 2.51285 62.9362 3.04738 62.9362H17.2696C17.8042 62.9362 18.2375 62.5029 18.2375 61.9684V46.7783ZM3.04738 45.7144C1.92528 45.7144 1.01562 46.624 1.01562 47.7461V61.9684C1.01562 63.0905 1.92528 64.0001 3.04738 64.0001H17.2696C18.3917 64.0001 19.3014 63.0905 19.3014 61.9684V45.7144H3.04738Z"
                                                fill="currentColor" />
                                            <path
                                                d="M45.7139 45.7144H61.9679C63.09 45.7144 63.9996 46.624 63.9996 47.7461V61.9684C63.9996 63.0905 63.09 64.0001 61.9679 64.0001H47.7456C46.6235 64.0001 45.7139 63.0905 45.7139 61.9684V45.7144Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M61.9679 46.7783H46.7778V61.9684C46.7778 62.5029 47.2111 62.9362 47.7456 62.9362H61.9679C62.5024 62.9362 62.9357 62.5029 62.9357 61.9684V47.7461C62.9357 47.2116 62.5024 46.7783 61.9679 46.7783ZM45.7139 45.7144V61.9684C45.7139 63.0905 46.6235 64.0001 47.7456 64.0001H61.9679C63.09 64.0001 63.9996 63.0905 63.9996 61.9684V47.7461C63.9996 46.624 63.09 45.7144 61.9679 45.7144H45.7139Z"
                                                fill="currentColor" />
                                            <path
                                                d="M0 2.03175C0 0.909646 0.909644 0 2.03175 0H16.3729C18.1829 0 19.0894 2.18848 17.8095 3.46841L3.46841 17.8095C2.18848 19.0894 0 18.1829 0 16.3729V2.03175Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.3729 1.18211H2.03175C1.56251 1.18211 1.18211 1.5625 1.18211 2.03175V16.3729C1.18211 17.1298 2.09729 17.5089 2.63253 16.9736L16.9736 2.63253C17.5089 2.09729 17.1298 1.18211 16.3729 1.18211ZM2.03175 0C0.909644 0 0 0.909646 0 2.03175V16.3729C0 18.1829 2.18848 19.0894 3.46841 17.8095L17.8095 3.46841C19.0894 2.18848 18.1829 0 16.3729 0H2.03175Z"
                                                fill="currentColor" />
                                            <path
                                                d="M31.1453 38.5718C30.5455 38.4301 30.1728 37.8177 30.3094 37.2022L32.5365 27.2996C32.6761 26.6857 33.2744 26.2972 33.8713 26.4434C34.4711 26.5851 34.8438 27.1976 34.7072 27.813L32.4801 37.7156C32.3391 38.3463 31.7229 38.7166 31.1453 38.5718Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M34.7072 27.813L32.4801 37.7156C32.3391 38.3463 31.7229 38.7166 31.1453 38.5718C30.5455 38.4301 30.1728 37.8177 30.3094 37.2022L32.5365 27.2996C32.6761 26.6857 33.2744 26.2972 33.8713 26.4434C34.4711 26.5851 34.8438 27.1976 34.7072 27.813Z"
                                                fill="currentColor" />
                                            <path
                                                d="M37.3329 37.0793C37.0285 37.0793 36.7256 36.9514 36.5044 36.7015C36.0931 36.2308 36.1303 35.5102 36.5876 35.0866L39.3804 32.5089L36.5876 29.9312C36.1303 29.5092 36.0931 28.7871 36.5044 28.3163C36.9172 27.8471 37.6209 27.8105 38.0782 28.231L41.7901 31.6588C42.0247 31.8767 42.1583 32.1844 42.1583 32.5089C42.1583 32.8334 42.0247 33.1412 41.7901 33.359L38.0782 36.7868C37.8644 36.9834 37.5987 37.0793 37.3329 37.0793Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M36.5876 35.0866C36.1303 35.5102 36.0931 36.2308 36.5044 36.7015C36.7256 36.9514 37.0285 37.0793 37.3329 37.0793C37.5987 37.0793 37.8644 36.9834 38.0782 36.7868L41.7901 33.359C42.0247 33.1412 42.1583 32.8334 42.1583 32.5089C42.1583 32.1844 42.0247 31.8767 41.7901 31.6588L38.0782 28.231C37.6209 27.8105 36.9172 27.8471 36.5044 28.3163C36.0931 28.7871 36.1303 29.5092 36.5876 29.9312L39.3804 32.5089L36.5876 35.0866Z"
                                                fill="currentColor" />
                                            <path
                                                d="M27.6828 37.0789C27.4171 37.0789 27.1513 36.9829 26.9375 36.7864L23.2257 33.3585C22.9911 33.1407 22.8574 32.8329 22.8574 32.5084C22.8574 32.1839 22.9911 31.8762 23.2257 31.6583L26.9375 28.2305C27.3948 27.81 28.0986 27.8481 28.5113 28.3158C28.9226 28.7866 28.8855 29.5072 28.4282 29.9307L25.6354 32.5084L28.4282 35.0862C28.8855 35.5082 28.9226 36.2303 28.5113 36.701C28.2901 36.9509 27.9872 37.0789 27.6828 37.0789Z"
                                                fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M25.6354 32.5084L28.4282 35.0862C28.8855 35.5082 28.9226 36.2303 28.5113 36.701C28.2901 36.9509 27.9872 37.0789 27.6828 37.0789C27.4171 37.0789 27.1513 36.9829 26.9375 36.7864L23.2257 33.3585C22.9911 33.1407 22.8574 32.8329 22.8574 32.5084C22.8574 32.1839 22.9911 31.8762 23.2257 31.6583L26.9375 28.2305C27.3948 27.81 28.0986 27.8481 28.5113 28.3158C28.9226 28.7866 28.8855 29.5072 28.4282 29.9307L25.6354 32.5084Z"
                                                fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_71_514">
                                                <rect width="64" height="64" fill="currentColor" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="count">04</span>
                            </div>
                            <div class="tg-process-content">
                                <p>Internationalization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
        process-area-end
        ==============================-->



        <!--==============================
        testimonial-area-start
        ==============================-->
        <div id="howWeOperate" class="tg-testimonial-spacing fix p-relative">
            <div class="testimonial-area include-bg" data-background="{{ asset('assets/img/testimonial/bg.jpg') }}">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="tg-testimonial-video">
                                <a class="tg-video-play popup-video tg-pulse-border"
                                    href="https://www.youtube.com/watch?v=TfU0qjuZkJ4">
                                    <span class="p-relative z-index-11">
                                        <svg width="20" height="24" viewBox="0 0 20 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 12L0.5 23.2583V0.74167L20 12Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="tg-testimonial-wrap tgbg-primary">
                                <div class="tg-testimonial-title-wrap mb-55">
                                    <span class="tg-section-subtitle mb-20">// How we operate</span>
                                    <h2 class="tg-section-title mb-30">Creating Good Business Together</h2>
                                    <div class="tg-testimonial-item-wrap p-relative">
                                        <div class="swiper tg-testimonial-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tg-testimonial-item">
                                                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus
                                                            error
                                                            sit voluptatem <br> accusantium doloremque laudantium, totam
                                                            rem aperiam, eaque<br> ipsa quae ab illo inventore veritatis
                                                            et quasi architecto beatae<br> vitae dicta sunt explicabo
                                                        </p>
                                                        <div
                                                            class="tg-testimonial-avatar-name d-flex align-items-center">
                                                            <img class="mr-20"
                                                                src="{{ asset('assets/asset/img/testimonial/avatar.png') }}"
                                                                alt="">
                                                            <div class="tg-testimonial-name">
                                                                <h3>Richard Herry</h3>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-testimonial-item">
                                                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus
                                                            error
                                                            sit voluptatem <br> accusantium doloremque laudantium, totam
                                                            rem aperiam, eaque<br> ipsa quae ab illo inventore veritatis
                                                            et quasi architecto beatae<br> vitae dicta sunt explicabo
                                                        </p>
                                                        <div
                                                            class="tg-testimonial-avatar-name d-flex align-items-center">
                                                            <img class="mr-20"
                                                                src="{{ asset('assets/asset/img/testimonial/avatar.png') }}"
                                                                alt="">
                                                            <div class="tg-testimonial-name">
                                                                <h3>Richard Herry</h3>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tg-testimonial-item">
                                                        <p class="mb-40">Sed ut perspiciatis unde omnis iste natus
                                                            error
                                                            sit voluptatem <br> accusantium doloremque laudantium, totam
                                                            rem aperiam, eaque<br> ipsa quae ab illo inventore veritatis
                                                            et quasi architecto beatae<br> vitae dicta sunt explicabo
                                                        </p>
                                                        <div
                                                            class="tg-testimonial-avatar-name d-flex align-items-center">
                                                            <img class="mr-20"
                                                                src="{{ asset('assets/asset/img/testimonial/avatar.png') }}"
                                                                alt="">
                                                            <div class="tg-testimonial-name">
                                                                <h3>Richard Herry</h3>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-testimonial-navigation">
                                            <span class="tg-testimonial-next d-inline-block">
                                                <svg width="19" height="16" viewBox="0 0 19 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.2471 7.69531H1.25841" stroke="black"
                                                        stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M7.94824 0.192383C7.94824 4.33974 4.39314 7.69569 -0.000335923 7.69569"
                                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M-0.000335923 7.69531C4.39314 7.69531 7.94824 11.0513 7.94824 15.1986"
                                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg>
                                            </span>
                                            <span class="tg-testimonial-prev d-inline-block">
                                                <svg width="19" height="16" viewBox="0 0 19 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.75293 7.69531H17.7416" stroke="black"
                                                        stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M11.0518 0.192383C11.0518 4.33974 14.6069 7.69569 19.0003 7.69569"
                                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M19.0003 7.69531C14.6069 7.69531 11.0518 11.0513 11.0518 15.1986"
                                                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="tg-hero-3-shape-2" src="{{ asset('assets/asset/img/hero/text-shape.png') }}" alt="">
        </div>
        <!--==============================
        testimonial-area-end
        ==============================-->



        <!--==============================
        Join Capital Community-area-start
        ==============================-->
        <div id="joinCapital" class="tg-about-area pb-60 pt-150 fix p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="tg-about-title-wrap mb-60 wow img-custom-anim-left">
                            <span class="tg-section-subtitle mb-20">// Join Capital Community</span>
                            <h2 class="tg-section-title">Are you an Entrepreneur & Investor? Join Capital Community
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="bottomline">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tg-about-item ml-0 mb-30">
                                <h4 class="mb-15">Contact DCC Headquarters</h4>
                                <div class="tg-footer-location tg-footer-2-location">
                                    <a class="address text-decoration-none" href="#!">via Creta, 26 – 25124 Brescia</a>
                                    <a class="email text-decoration-none" href="mailto:gedinfo@mail.com">gedinfo@mail.com</a>
                                    <a class="number" href="#!">Tel: +04203490364</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tg-about-item ml-80 mb-30">
                                <a href="#findNear" class="mb-15">Find the DCC Center closest to you</a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="tg-about-item ml-80 mb-30">
                                <a href="#!" class="mb-15">Make it creative</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="bottomline" id="findNear">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="addressSearchbaar">
                                <form action="">
                                    <div class="">
                                        <div class="row search">
                                            <label class="form-label col-lg-3">Find the DCC Center closest to
                                                you</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="">
                                                <button class="btn btn-primary">Near</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="leftsideSearchAddress mt-30">
                                <ul class="findsearchlist">
                                    <li>
                                        <div class="findTheDccAdd">
                                            <p>
                                                <span><strong>Informazioni sulla Società</strong></span>
                                                <span><strong>Sede Legale:</strong></span>
                                                <span>CARPI (MO), VIA MANZONI 22</span>
                                                <span>CAP: 41012</span>
                                                <span>Italia</span>
                                            </p>
                                            <p>
                                                <span><strong>PEC:</strong> gedintermedia@pec.it</span>
                                                <span><strong>Numero REA:</strong> MO - 451409</span>
                                                <span><strong>Codice Fiscale e N. Iscrizione Registro Imprese:</strong>
                                                    04203490364</span>
                                                <span><strong>Forma Giuridica:</strong> Società a responsabilità
                                                    limitata (S.R.L.)</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="mapandLocation mt-30">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.9441640660425!2d10.875763615565226!3d44.78522357909898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fdd0a44437fd7%3A0x9e48be57c4b66bb9!2sVia%20Manzoni%2C%2022%2C%2041012%20Carpi%20MO%2C%20Italy!5e0!3m2!1sit!2sit!4v1722172023576!5m2!1sit!2sit"
                                    width="100%" height="400" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="mt-60">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tg-about-item ml-0 mb-30">
                                <h4 class="mb-15">Join the Delex Capital Community</h4>
                                <p class="mb-70">Fill out the form</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tg-contact-form pl-70 pb-50">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tg-contact-input mb-15">
                                                <label>DCC Reference Center</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>Surname</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>Society</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>Role</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>Telephone</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="tg-contact-input mb-30">
                                                <label>E-mail</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="tg-contact-input">
                                                <label>Request</label>
                                                <textarea placeholder="Share your thoughts" class="mb-10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-check formCheckbox mb-30">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I consent to the processing of my data in accordance with
                                                    Legislative to request information
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tg-contact-input">
                                                <button class="tg-btn-two" type="submit">Request Information</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--==============================
        Join Capital Community-area-end
        ==============================-->

        <!--==============================
        Become a DCC-area-start
        ==============================-->

        <div id="becomesCapitalCommunity" class="becomesCapitalCommunity  bg-position pt-120 pb-60 jarallax">
            <div class="mask_dcc">
                <img src="{{ asset('assets/asset/img/mask-dcc-1.png') }}">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tg-service-2-content bottomline">
                            <span class="tg-service-2-subtitle mb-30">// becomes Capital Community Center</span>
                            <h2 class="tg-section-title">Are you a professional structure? <br>Become a Capital
                                Community Center</h2>
                            <div class="row pt-40">

                                <div class="col-lg-3">
                                    <p class="mb-30">The following professional structures can be accredited for the
                                        selection:</p>
                                    <ul class="ourValuesList">
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Financial advisor</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Labour Consultant</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Corporate Finance Advisor
                                        </li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Wealth Manager</li>
                                        <li><i class="fa-regular fa-circle-arrow-right"></i> Law Firm</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <p class="mb-10">Only medium or large-sized structures with their own headquarters
                                        located in the geographical area of ​​interest can be evaluated.</p>
                                    <p class="mb-10">Accreditation is for the entire structure and not for individual
                                        professionals.</p>
                                    <p class="">Capital Community Centers operate exclusively in the reference
                                        areas
                                        (provincial capital or industrial district).</p>
                                </div>
                                <div class="col-lg-3">
                                    <div class="tg-about-item ml-0 mb-30">
                                        <h4 class="mb-15">Contact DCC Headquarters</h4>
                                        <div class="tg-footer-location tg-footer-2-location">
                                            <a class="address text-decoration-none" href="#!">via Creta, 26 – 25124 Brescia</a>
                                            <a class="email text-decoration-none" href="mailto:gedinfo@mail.com">gedinfo@gmail.com</a>
                                            <a class="number" href="#!">Tel:  +04203490364</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="tg-about-item ml-80 mb-30">
                                        <a href="#jointheDelex" class="mb-15">Fill out the form</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-60" id="jointheDelex">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tg-about-item ml-0 mb-30">
                                    <h4 class="mb-15">Join the Delex Capital Community</h4>
                                    <p class="mb-70">Fill out the form</p>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="tg-contact-form pl-70 pb-50">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tg-contact-input mb-15">
                                                    <label>DCC Reference Center</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>Name</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>Surname</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>Society</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>Role</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>Telephone</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tg-contact-input mb-30">
                                                    <label>E-mail</label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="tg-contact-input">
                                                    <label>Request</label>
                                                    <textarea placeholder="Share your thoughts" class="mb-10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-check formCheckbox mb-30">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I consent to the processing of my data in accordance with
                                                        Legislative to request information
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tg-contact-input">
                                                    <button class="tg-btn-two" type="submit">Request
                                                        Information</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--==============================
        Become a DCC-area-end
        ==============================-->



    </main>
    <!--==============================
    main-area-end
    ==============================-->

    <!--==============================
    footer-area-start
    ==============================-->
    <footer>
        <div class="footer-area pt-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tg-footer-widget p-relative mb-30">
                            <h4 class="tg-footer-title wow img-custom-anim-left">Let's Do Good Business. <br> Together.
                            </h4>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tg-footer-widget mb-30">
                            <div class="tg-footer-location mb-35">
                                <h4>Address</h4>
                                <a href="#">VIA MANZONI 22, CARPI (MO)<br> CAP: 41012</a>
                            </div>

                            <div class="tg-footer-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#">
                                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.33161 6.77486L15.1688 0H13.7856L8.71722 5.8826L4.66907 0H0L6.12155 8.89546L0 16H1.38336L6.73581 9.78785L11.0109 16H15.68L9.33148 6.77486H9.33187H9.33161ZM7.43696 8.97374L6.81669 8.088L1.88171 1.03969H4.00634L7.98902 6.72789L8.60929 7.61362L13.7863 15.0074H11.6616L7.43709 8.974V8.97361L7.43696 8.97374Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tg-footer-widget mb-30">
                            <div class="tg-footer-location tg-footer-2-location">
                                <h4>Say hello!</h4>
                               <a class="email text-decoration-none" href="mailto:gedintermedia@pec.it">gedintermedia@pec.it</a>

                                </a>
                                <a class="number" href="#!">+04203490364</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tg-footer-bottom mt-60">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tg-footer-copyright">
                                <p>© 2025 <a href="#">GED Intermedia.</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-7">
                            <div class="tg-footer-menu">
                                <ul>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">What we do</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==============================
    footer-area-end
    ==============================-->


    <!--==============================
    JS here
    ==============================-->
    <script src="{{ asset('assets/asset/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/asset/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/asset/js/counter.js') }}"></script>
    <script src="{{ asset('assets/asset/js/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/asset/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/asset/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/asset/js/jarallax.js') }}"></script>
    <script src="{{ asset('assets/asset/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/asset/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/asset/js/wow.js') }}"></script>
    <script src="{{ asset('assets/asset/js/main.js') }}"></script>
</body>

</html>
