@extends('admin.auth.dashboard')


@section('content')
<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('assets/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="asset('assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="asset('assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="asset('assets/css/header-colors.css')}}" />

<div style="margin-left: 300px;" class="mt-4">
    <div class="card w-50">
        <div class="card-header bg-primary text-white py-2 px-3">
            <h6 class="mb-0">Create Category</h6>
        </div>
        <div class="card-body py-3 px-4">
            <form method="POST" action="{{ route('admin.category.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $category->name ?? '') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="3" class="form-control form-control-sm">{{ old('description', $category->description ?? '') }}</textarea>
                </div> --}}

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-secondary px-3">Back</a>
                    <button type="submit" class="btn btn-sm btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
