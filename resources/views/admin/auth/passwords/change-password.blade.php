@extends('admin.auth.dashboard')

@section('content')

<div class="wrapper">
	<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="p-4">

								<!-- Logo -->
								<div class="mb-4 text-center">
									<img src="{{ asset('assets/images/ged_logo.jpeg') }}" width="60" alt="" />
								</div>

								<!-- ✅ Flash messages -->
								@if(session('success'))
									<div class="alert alert-success">{{ session('success') }}</div>
								@endif

								@if(session('error'))
									<div class="alert alert-danger">{{ session('error') }}</div>
								@endif

								<!-- Password change form -->
								<form action="{{ route('admin.password.update') }}" method="POST">
									@csrf

									<div class="text-start mb-4">
										<h5 class="">Change Your Password</h5>
										<p class="mb-0">Please enter your current and new password to update.</p>
									</div>

									<div class="mb-3 mt-4 position-relative">
										<label class="form-label">Current Password</label>
										<input type="password" name="old_password" class="form-control password-field" placeholder="Enter current password" required>
										<span class="position-absolute top-50 end-0 translate-middle-y me-3 toggle-password" style="cursor: pointer;">
											<i class="bi bi-eye-slash-fill"></i>
										</span>
										@error('old_password')
											<div class="text-danger small">{{ $message }}</div>
										@enderror
									</div>

									<div class="mb-3 position-relative">
										<label class="form-label">New Password</label>
										<input type="password" name="new_password" class="form-control password-field" placeholder="Enter new password" required>
										<span class="position-absolute top-50 end-0 translate-middle-y me-3 toggle-password" style="cursor: pointer;">
											<i class="bi bi-eye-slash-fill"></i>
										</span>
										@error('new_password')
											<div class="text-danger small">{{ $message }}</div>
										@enderror
									</div>

									<div class="mb-4 position-relative">
										<label class="form-label">Confirm New Password</label>
										<input type="password" name="new_password_confirmation" class="form-control password-field" placeholder="Confirm password" required>
										<span class="position-absolute top-50 end-0 translate-middle-y me-3 toggle-password" style="cursor: pointer;">
											<i class="bi bi-eye-slash-fill"></i>
										</span>
									</div>

									<div class="d-grid gap-2">
										<button type="submit" class="btn btn-primary">Change Password</button>
										<a href="{{ route('admin.user-profiles') }}" class="btn btn-light">
											<i class='bx bx-arrow-back mr-1'></i>Back to Profile
										</a>
									</div>
								</form>

							</div> <!-- /p-4 -->
						</div> <!-- /card-body -->
					</div> <!-- /card -->
				</div> <!-- /col -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div>
</div>


@push('scripts')
<script>
	document.querySelectorAll('.toggle-password').forEach(function(toggle) {
		toggle.addEventListener('click', function () {
			const input = this.closest('.position-relative').querySelector('.password-field');
			const icon = this.querySelector('i');

			if (input.type === 'password') {
				input.type = 'text';
				icon.classList.remove('bi-eye-slash-fill');
				icon.classList.add('bi-eye-fill');
			} else {
				input.type = 'password';
				icon.classList.remove('bi-eye-fill');
				icon.classList.add('bi-eye-slash-fill');
			}
		});
	});
</script>
@endpush


@endsection
