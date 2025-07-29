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
    <!--==============================Scroll-top-start==============================-->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fa-sharp fa-regular fa-arrow-up"></i>
    </button>
    <!--==============================Scroll-top-end==============================-->
    <!-- <div class="grid_over">
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
    </div> -->
    <!--==============================header-area-start==============================-->
    <header class="tg-header-height">
        <div id="header-sticky" class="tg-header__area header-mobile-spacing p-relative">
            <div class="container-fluid container-1710">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-3">
                        <div class="tg-header-logo">
                            <a class="logo-1" href="#!"><img src="assets/asset/img/logo.jpeg" alt="logo"></a>
                            <a class="d-none logo-2" href="#!"><img src="assets/asset/img/logo.jpeg"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-none d-xl-block">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu tgmenu-main-4 ml-5">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children">
                                            <a href="#!">
                                                <span class="tgmenu-link-effect">
                                                    <span class="effect-1">About Us</span>
                                                    <span class="effect-1">About Us</span>
                                                </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#aboutUs">About</a></li>
                                                <!-- <li><a href="#valuesarea">Values</a></li> -->
                                            </ul>
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
                                <a class="tg-btn tg-btn-primary tg-btn-hover" href="{{ route('reserved') }}">
                                    <span class="hover-effect">
                                        <span class="effect-1">Reserved Area</span>
                                        <span class="effect-1">Reserved Area</span>
                                    </span>
                                </a>
                            </div>
                            <div class="tg-header-btn ml-15 d-none d-sm-inline-block">
                                <a class="tg-btn tg-btn-primary tg-btn-hover" href="{{ route('userlogout') }}">
                                    <span class="hover-effect">
                                        <span class="effect-1">Logout</span>
                                        <span class="effect-1">Logout</span>
                                    </span>
                                </a>
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
                    <a href="#!"><img data-width="160" src="assets/asset/img/logo/logo.png" alt="logo"></a>
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
                <a class="mb-40 d-block" href="#!"><img data-width="127" src="assets/asset/img/logo.jpeg"
                        alt="logo"></a>
                <p>Businorem ipsum dolor sit amet cons interdum quam duis variuy time honored tradition etting .</p>
            </div>
            <div class="offcanvas-gallery mb-60">
                <a class="popup-image" href="assets/asset/img/ofcanvas/thumb.jpg"><img class="m-img"
                        src="assets/asset/img/ofcanvas/thumb.jpg" alt=""></a>
                <a class="popup-image" href="assets/asset/img/ofcanvas/thumb-2.jpg"><img class="m-img"
                        src="assets/asset/img/ofcanvas/thumb-2.jpg" alt=""></a>
                <a class="popup-image" href="assets/asset/img/ofcanvas/thumb-3.jpg"><img class="m-img"
                        src="assets/asset/img/ofcanvas/thumb-3.jpg" alt=""></a>
                <a class="popup-image" href="assets/asset/img/ofcanvas/thumb-4.jpg"><img class="m-img"
                        src="assets/asset/img/ofcanvas/thumb-4.jpg" alt=""></a>
            </div>
            <div class="contact-list mb-60">
                <h4 class="mb-15">Information</h4>
                <a href="tel:(090)87658654385"><i class="fa-solid fa-phone"></i> + 000 0000 0000</a>
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
    <!--==============================header-area-end==============================-->
    <!--==============================main-area-start==============================-->
    <main class="tgbg-primary">
        <!--==============================hero-area-start==============================-->
        <div id="" class="hero-area tg-hero-8-spacing top-padding p-relative fix">
            <!-- <img class="tg-hero-8-shape-two" src="assets/asset/img/hero/hero-8/shape.png" alt=""> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-80">
                        <div class="tg-hero-8-wrap p-relative z-index-3 wow img-custom-anim-left">
                            <!-- <div class="heroImg">
                                <img src="assets/asset/img/banner-home.png">
                            </div> -->
                            <div class="banner-heading">
                                <h2>Welcome to the Capital Community</h2>
                                <p>Here you can find the deals that interest you most, 16 well-defined categories, clear
                                    teasers and presentation documents, exclusive sales mandates only, and many deals in
                                    which you can choose to invest.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card filter-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="filter-main">
                                            <label>All Categories</label>
                                            <select name="category_id" id="categoryFilter" class="form-control">
                                                <option value="">All Categories</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="filter-main">
                                            <label>All Types</label>
                                            <select name="type_id" class="form-control">
                                                <option value="">All Types</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="filter-main">
                                            <label>Buy/Sell</label>
                                            <select name="buy_sell" class="form-control">
                                                <option value="">Buy/Sell</option>
                                                <option value="buy"
                                                    {{ request('buy_sell') == 'buy' ? 'selected' : '' }}>Buy</option>
                                                <option value="sell"
                                                    {{ request('buy_sell') == 'sell' ? 'selected' : '' }}>Sell</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="filter-main">
                                            <label>Operation Status</label>
                                            <select name="operation_status_id" class="form-control">
                                                <option value="">Operation Status</option>
                                                @foreach ($statuses as $status)
                                                    <option value="{{ $status->id }}"
                                                        {{ request('operation_status_id') == $status->id ? 'selected' : '' }}>
                                                        {{ $status->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================hero-area-end==============================-->
        <!-- section-start -->

        <section class="top-padding card-sec-main">
            @foreach ($products as $product)
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-4">

                            <div class="card dash-card">
                                <div class="position-relative">
                                    <div class="card-img image_item">
                                        @php
                                            $images = json_decode($product->images ?? '[]');
                                        @endphp

                                        <img src="{{ asset('uploads/products/' . ($images[0] ?? 'default.jpg')) }}"
                                            class="w-100" />
                                        <div class="hover">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </div>

                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header hdr-part">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Details
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="view-main">
                                                        <h5>Renewable energy plant license sale</h5>
                                                        <p>An Italian PropTech platform created to digitize the real
                                                            estate
                                                            buying and selling process. Its core is an AI-based real
                                                            estate
                                                            appraiser that has already generated over 220,000
                                                            valuations.
                                                            Solutions offered:</p>
                                                        <ul>
                                                            <li>Free real estate appraisals.</li>
                                                            <li>Lead marketplace.</li>
                                                            <li>Integrated CRM for agencies.</li>
                                                            <li>Real estate reports, chatbots, and upselling tools.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cont">
                                        <span class="badge text-bg-dark">Renewable energy plant license sale</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table card-table">
                                            <tbody>
                                                <tr>
                                                    <td class="first-child">Operation code</td>
                                                    <td class="last-child">{{ $product->operation_code }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">Nation</td>
                                                    <td class="last-child">{{ $product->nation->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">Region</td>
                                                    <td class="last-child">{{ $product->region->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">Sector</td>
                                                    <td class="last-child">{{ $product->sector->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">System type</td>
                                                    <td class="last-child">{{ $product->type_of_system }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">Operation Type</td>
                                                    <td class="last-child">{{ $product->type_of_operation }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first-child">Value</td>
                                                    <td class="last-child">{{ $product->value_from }} -
                                                        {{ $product->value_from }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="">
                                        <button type="button" class="tg-btn-two request-btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Request Information</button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="bdy-part">
                                                        <div class="">
                                                            <p>Request information for Ref. 202507131714 – Biomethane
                                                                Operation
                                                                Alessandria (Piedmont)</p>
                                                        </div>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="tg-btn-two send-req">Request
                                                            Sending</button>
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
            @endforeach

            <center>@if ($products->isEmpty())
                <p>No products match your filters.</p>
            @endif</center>
        </section>
        <!-- section-end -->
    </main>
    <!--==============================main-area-end==============================-->
    <!--==============================footer-area-start==============================-->
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
                                <a href="#">Germany —<br> 785 15h Street, Office 478<br> Berlin, De 81566</a>
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
                                <a class="email" href="#!">gedinfo@mail.com</a>
                                <a class="number" href="#!">+123 456 7890</a>
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
    <!--==============================footer-area-end==============================-->
    <!--==============================JS here==============================-->
    <script src="{{ asset('assets/asset/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ 'assets/asset/js/imagesloaded.pkgd.min.js' }}"></script>
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
