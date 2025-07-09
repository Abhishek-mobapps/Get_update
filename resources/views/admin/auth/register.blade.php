{{-- <!DOCTYPE html>
<html>
<head><title>Admin Register</title></head>
<body>
<h2>Admin Register</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form ">
   
    <label>Name:</label>
    <input required><br>
    <label>Email:</label>
    <input  required><br>
    <label>Contact Number:</label>
    <input><br>
    <label>Password:</label>
    <input required><br>
    <label>Confirm Password:</label>
    <input  required><br>
    <button type="submit">Register</button>
</form>

<p><a href="{{ route('admin.login') }}">Login</a></p>
</body>
</html> --}}
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/ged_logo.jpeg') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap')" rel="stylesheet">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <title>Register</title>
    <style>
	body {
    margin: 0;
    padding: 0;
    background-image: url('https://img.freepik.com/free-photo/low-angle-view-skyscrapers_1359-1092.jpg?semt=ais_hybrid&w=740');
    background-size: cover;        /* Make image cover entire body */
    background-repeat: no-repeat;  /* Prevent tiling */
    background-position: center;   /* Center the image */
    background-attachment: fixed;  /* Optional: keeps background fixed on scroll */
} </style>
</head>

<body class="">
    <!--wrapper-->
    @if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
    @include('admin.auth.main-components.flash-alerts')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-4">
                                    <div class="mb-3 text-center">
                                        <img src="{{asset('assets/images/ged_logo.jpeg')}}" width="150" alt="" />
                                    </div>
                                    <div class="text-center mb-4">
                                        <h3 class="">GED Intermedia</h3>
                                        <p class="mb-0">Please fill the below details to create your account</p>
                                    </div>
                                    <div class="form-body">
                                       
                                        <form method="POST" action="{{route('admin.register')}}" class="row g-3"  enctype="multipart/form-data">
                                             @csrf
                                           <!-- Centered Logo -->
{{-- <div class="text-center mb-4">
    <img src="{{ asset('assets/images/ged_logo.jpeg') }}" alt="Admin Logo" style="max-width: 120px;">
</div> --}}

<div class="col-12">
    <label for="inputUsername" class="form-label">Username</label>
    <input type="text" name="name" value="{{ old('name') }}"
        class="form-control" id="inputUsername"
        placeholder="Enter Username">
</div>

<div class="col-12">
    <label for="inputEmailAddress" class="form-label">Email Address</label>
    <input type="email" name="email" value="{{ old('email') }}"
        class="form-control" id="inputEmailAddress"
        placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$>
</div>

<div class="col-12">
    <label for="inputPassword" class="form-label">Password</label>
    <div class="input-group" id="show_hide_password">
        <input type="password" name="password"
            class="form-control border-end-0" id="inputPassword"
            placeholder="Enter Password"> 
        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
    </div>
</div>

<div class="col-12">
    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
    <div class="input-group" id="show_hide_confirm_password">
        <input type="password" name="password_confirmation"
            class="form-control border-end-0" id="inputConfirmPassword"
            placeholder="Confirm Password"> 
        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
    </div>
</div>

<div class="col-12">
    <label for="inputContactNumber" class="form-label">Enter Your Number</label>
    <div class="input-group">
        <input type="text" name="contact_number"
            value="{{ old('contact_number') }}"
            class="form-control border-end-0" id="inputContactNumber"
            placeholder="9999999999"
            {{-- validation digit --}}
             type="number"
           id="onlyTen"
           name="onlyTen"
           value="10"
           min="10"
           max="10"
           required
           oninput="this.value = this.value.slice(0, 10)">
        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-phone'></i></a>
    </div>
</div>

<div class="col-12">
    <label for="inputProfileImage" class="form-label">Profile Photo</label>
    <div class="input-group">
        <input type="file" name="profile_image" accept="image/*"
               class="form-control border-end-0" id="inputProfileImage">
        <span class="input-group-text bg-transparent">
            <i class='bx bx-upload'></i>
        </span>
    </div>
</div>


                                            {{-- <div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmailAddress" placeholder="Enter Email">
											</div> --}}

                                            {{-- <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read
                                                        and agree to Terms & Conditions</label>
                                                </div>
                                            </div> --}}
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Already have an account? <a
                                                            href="{{ route('admin.login') }}">Login</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>


</html>
