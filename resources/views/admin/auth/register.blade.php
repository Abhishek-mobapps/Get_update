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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Register</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" />

    <style>
        body {
            background: url('https://img.freepik.com/free-photo/low-angle-view-skyscrapers_1359-1092.jpg?semt=ais_hybrid&w=740') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
        }
        .register-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 25px;
            border-radius: 10px;
            max-width: 850px;
            margin: 5% auto;
        }
        .input-group-text {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="register-card shadow">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/ged_logo.jpeg') }}" width="100" alt="GED Logo">
            <h4 class="mt-2">Admin Register</h4>
            <p class="text-muted small">Fill in the details to create an admin account</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger small">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.register') }}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                        <input type="text" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Full Name">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                        <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="example@mail.com">
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="col-md-6">
                    <label class="form-label">Contact Number</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-phone'></i></span>
                        <input type="text" name="contact_number" maxlength="10" required class="form-control" placeholder="10-digit number">
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="col-md-6">
                    <label class="form-label">Profile Photo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-image'></i></span>
                        <input type="file" name="profile_image" accept="image/*" class="form-control">
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-lock'></i></span>
                        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class='bx bx-lock-alt'></i></span>
                        <input type="password" name="password_confirmation" required class="form-control" placeholder="Re-enter Password">
                    </div>
                </div>

                <div class="col-12 d-grid mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <div class="col-12 text-center mt-2">
                    <small>Already have an account? <a href="{{ route('admin.login') }}">Login</a></small>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
