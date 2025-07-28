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

<body>
    <!--==============================main-area-start==============================-->
    <section class="wrapper-content">
        <div class="mask_dcc img-mask">
            <img src="{{ asset('./assets/asset/img/mask-dcc-4.png') }}">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card login-card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="logo-img">
                                            <img src="{{ asset('./assets/asset/img/logo.jpeg') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="access-hd">
                                            <h6>Welcome to G.E.D. Intermedia</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set tg-contact-input">
                                            <label>Username</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set tg-contact-input">
                                            <label>Password</label>
                                            <input type="password" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check check-ratio">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember me
                                                </label>
                                            </div>
                                            <div class="forget-pass">
                                                <a href="{{ route('forget-page') }}">Forgot your password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <a href="{{ route('home') }}" class="tg-btn-sign btn btn-primary">Sign
                                                In</a>
                                        </div>

                                        <div class="create-new">
                                            <p>Don't have an account? <a href="{{ route('register-page') }}">Create
                                                    one</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================main-area-end==============================-->
    <!--==============================JS here==============================-->
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
