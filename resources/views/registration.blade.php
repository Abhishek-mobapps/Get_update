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
            <img src="./assets/img/mask-dcc-4.png">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card login-card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('register.submit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Logo -->
                                    <div class="col-md-12">
                                        <div class="logo-img">
                                            <img src="{{ asset('./assets/asset/img/logo.jpeg') }}" />
                                        </div>
                                    </div>

                                    <!-- Headline -->
                                    <div class="col-md-12">
                                        <div class="access-hd">
                                            <h6>Sign up for G.E.D Intermedia</h6>
                                            <span>No payment method required to register a free trial account!</span>
                                            <p>For immediate access to G.E.D Intermedia, signup for your free 7-day
                                                trial account now</p>
                                        </div>
                                    </div>

                                    <!-- Fields -->
                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Name</label>
                                            <input type="text" name="name" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone_number" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="field-set tg-contact-input">
                                            <label>Email</label>
                                            <input type="email" name="email" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Company Address</label>
                                            <input type="text" name="company_address" required />
                                        </div>
                                    </div>

                                    <!-- Files -->
                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Chamber of Commerce Certificate (PDF)</label>
                                            <input type="file" name="chamber_certificate" accept="application/pdf" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Business Mandate (PDF)</label>
                                            <input type="file" name="business_mandate" accept="application/pdf" />
                                        </div>
                                    </div>

                                    <!-- Passwords -->
                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Password</label>
                                            <input type="password" name="password" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set tg-contact-input">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" required />
                                        </div>
                                    </div>

                                    <!-- Hidden Subscription Type -->
                                    <input type="hidden" name="subscription_type" id="subscription_type" required>

                                    <!-- Subscription Buttons -->
                                    <div class="col-md-12 d-flex justify-content-center gap-4">
                                        <button type="button" class="tg-btn-sign"
                                            onclick="selectSubscription('monthly')">Subscribe monthly - $39</button>
                                        <button type="button" class="tg-btn-sign"
                                            onclick="selectSubscription('yearly')">Subscribe yearly - $299</button>
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button class="tg-btn-sign" type="submit">Submit</button>
                                            <a href="{{ route('userlogin') }}" class="back-btn">Back to Login</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <script>
                                function selectSubscription(type) {
                                    document.getElementById('subscription_type').value = type;
                                    event.target.closest('form').submit(); // submit the form with subscription type set
                                }
                            </script>

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
