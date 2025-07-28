{{-- <!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>
<h2>Admin Login</h2>



<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <label><input type="checkbox" name="remember"> Remember Me</label><br>
    <button type="submit">Login</button>
</form>

<p><a href="{{ route('admin.password.request') }}">Forgot Password?</a></p>
<p><a href="{{ route('admin.register') }}">Register</a></p>
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>
<h2>Admin Login</h2>



<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <label><input type="checkbox" name="remember"> Remember Me</label><br>
    <button type="submit">Login</button>
</form>

<p><a href="{{ route('admin.password.request') }}">Forgot Password?</a></p>
<p><a href="{{ route('admin.register') }}">Register</a></p>
</body>
</html> --}}
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GED Admin Login</title>

	<!-- Favicon and Styles -->
	<link rel="icon" href="{{ asset('assets/images/ged_logo.jpeg') }}" type="image/png" />
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

	<style>
		body {
			background: url('https://img.freepik.com/free-photo/low-angle-view-skyscrapers_1359-1092.jpg?semt=ais_hybrid&w=740') no-repeat center center fixed;
			background-size: cover;
			font-family: 'Roboto', sans-serif;
		}

		.login-box {
			background: #ffffff;
			padding: 40px 30px;
			border-radius: 10px;
			max-width: 450px;
			margin: 80px auto;
			box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
		}

		.input-group-text {
			background-color: #f0f0f0;
			border-right: none;
		}

		.form-control {
			border-left: none;
		}

		.form-control:focus {
			box-shadow: none;
			border-color: #007bff;
		}

		.btn-primary {
			border-radius: 30px;
		}
	</style>
</head>

<body>
	<div class="login-box">
		<div class="text-center mb-4">
			<img src="{{ asset('assets/images/ged_logo.jpeg') }}" alt="Logo" width="150">
			<h5 class="mt-3">GED Intermedia</h5>
			<p class="text-muted">Please log in to your account</p>
		</div>

		@if(session('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="mb-0">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="POST" action="{{ route('admin.login') }}">
			@csrf

			<div class="mb-3 input-group">
				<span class="input-group-text"><i class="bx bx-envelope"></i></span>
				<input type="email" name="email" class="form-control" placeholder="Email" required>
			</div>

			<div class="mb-3 input-group" id="show_hide_password">
				<span class="input-group-text"><i class="bx bx-lock-alt"></i></span>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<span class="input-group-text bg-white toggle-password" style="cursor:pointer;"><i class="bx bx-hide"></i></span>
			</div>

			<div class="mb-3 form-check">
				<input type="checkbox" name="remember" class="form-check-input" id="remember">
				<label class="form-check-label" for="remember">Remember Me</label>
			</div>

			<div class="d-grid mb-3">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>

			<div class="text-center">
				{{-- <small>Don't have an account? <a href="{{ route('admin.register') }}">Register here</a></small><br> --}}
				<small><a href="#">Forgot Password?</a></small>
			</div>
		</form>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.toggle-password').click(function () {
				let input = $('#show_hide_password input');
				let icon = $('#show_hide_password i');
				if (input.attr('type') === 'password') {
					input.attr('type', 'text');
					icon.removeClass('bx-hide').addClass('bx-show');
				} else {
					input.attr('type', 'password');
					icon.removeClass('bx-show').addClass('bx-hide');
				}
			});
		});
	</script>
</body>
</html>
