<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GED Intermedia - Portal</title>
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />

  <!-- External Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- App CSS Assets -->
  <link href="{{ asset('assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />

  <!-- Pace Loader -->
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>
</head>
<body>

<!-- Header with Dropdown -->
<div class="bg-light p-3">
  <header>
    <div class="topbar d-flex align-items-center">
      <nav class="navbar navbar-expand w-100 justify-content-between">

        <!-- Mobile Menu -->
        <div class="mobile-toggle-menu">
          <i class='bx bx-menu fs-4'></i>
        </div>

        <!-- Search (modal trigger) -->
        <div class="search-bar d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#SearchModal">
          <a href="javascript:;" class="btn d-flex align-items-center">
            <i class='bx bx-search'></i> Search
          </a>
        </div>

        <!-- User Dropdown -->
        <div class="user-box dropdown px-3">
          <a class="d-flex align-items-center nav-link dropdown-toggle gap-2"
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ Auth::guard('admin')->user()?->profile_image 
        ? asset('storage/' . Auth::guard('admin')->user()->profile_image) 
        : asset('assets/images/avatars/default.png') }}" class="user-img rounded-circle" alt="User Avatar" width="40" height="40">
            <div class="user-info d-none d-md-block">
              <p class="user-name mb-0 fw-semibold">{{ Auth::guard('admin')->user()?->name ?? 'Guest' }}</p>
              <p class="designation mb-0 text-muted small">{{ Auth::guard('admin')->user()?->email ?? 'Guest' }}</p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm rounded-3 p-2">
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="{{route('admin.user-profiles')}}">
                <i class="bx bx-user fs-5 me-2"></i> <span>Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="{{route('admin.password.change')}}">
                <i class="bx bx-user fs-5 me-2"></i> <span>Change Password</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="{{route('admin.logout')}}">
                <i class="bx bx-user fs-5 me-2"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- End User Dropdown -->

      </nav>
    </div>
  </header>
</div>

<!-- Bootstrap Bundle JS (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
