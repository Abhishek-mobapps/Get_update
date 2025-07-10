@extends('admin.auth.dashboard')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="d-flex justify-content-center">
                                    <form id="profileImageForm" method="POST" action="{{ route('admin.profile.upload') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @if ($errors->has('profile_image'))
                                            <div class="text-danger mt-2">
                                                {{ $errors->first('profile_image') }}
                                            </div>
                                        @endif

                                        <div class="d-flex justify-content-center">
                                            <div class="position-relative d-inline-block"
                                                style="width: 130px; height: 130px;">
                                                {{-- Profile Image --}}
                                                @php
                                                    $admin = Auth::guard('admin')->user();
                                                @endphp

                                                <img src="{{ $admin->profile_image
                                                    ? asset('storage/' . $admin->profile_image)
                                                    : asset('assets/images/avatars/default.png') }}"
                                                    class="rounded-circle border border-3 shadow-sm w-100 h-100 object-fit-cover"
                                                    alt="Profile Image" style="max-width: 130px; max-height: 130px;">

                                                {{-- Pencil Icon --}}
                                                <label for="profile_image_input"
                                                    class="btn btn-sm btn-light border shadow position-absolute rounded-circle"
                                                    style="bottom: 4px; right: 4px; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center;"
                                                    title="Change photo">
                                                    <i class="bi bi-pencil-fill fs-6 text-dark"></i>
                                                </label>

                                                {{-- Hidden File Input --}}
                                                <input type="file" name="profile_image" id="profile_image_input"
                                                    class="d-none" accept="image/*">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="mt-3">
                                    <h4>{{ Auth::guard('admin')->user()?->name ?? 'Guest' }}</h4>
                                    {{-- <p class="text-secondary mb-1">{{ Auth::guard('admin')->user()?->email ?? 'Guest' }}</p> --}}
                                    {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-mail me-2 icon-inline">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4
                             c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        Email
                                    </h6>
                                    <span class="text-secondary">{{ Auth::guard('admin')->user()->email }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone me-2 icon-inline">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                             19.86 19.86 0 0 1-8.63-3.07
                             19.5 19.5 0 0 1-6-6
                             19.86 19.86 0 0 1-3.07-8.63
                             A2 2 0 0 1 4.09 2h3a2 2 0 0 1 2 1.72
                             12.05 12.05 0 0 0 .57 2.57
                             a2 2 0 0 1-.45 2.11L8.09 9.91
                             a16 16 0 0 0 6 6l1.51-1.51
                             a2 2 0 0 1 2.11-.45
                             12.05 12.05 0 0 0 2.57.57
                             A2 2 0 0 1 22 16.92z" />
                                        </svg>
                                        Phone
                                    </h6>
                                    <span class="text-secondary">{{ Auth::guard('admin')->user()->contact_number }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">




                    <form action="{{ route('admin.update') }}" method="POST">
                        @csrf

                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->name }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="email" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->email }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="contact_number" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->contact_number }}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                    <p>Web Design</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Website Markup</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>One Page</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%"
                                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Mobile Template</p>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Backend API</p>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 66%"
                                            aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('profile_image_input').addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;

            const allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
            if (!allowedTypes.includes(file.type)) {
                alert('Please upload a valid image file (jpg, png, webp, gif).');
                return;
            }

            document.getElementById('profileImageForm').submit();
        });
    </script>
@endsection
