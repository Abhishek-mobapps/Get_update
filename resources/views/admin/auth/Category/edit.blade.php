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

<div id="editFormContainer"  class="card mt-3 mx-auto" style="max-width: 500px;">
    <div class="card-header bg-primary text-white py-2 px-3">Edit Category</div>
    <div class="card-body py-2 px-3">
        <form id="editCategoryForm" action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label class="form-label small">Category Name</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}" id="editCategoryName" class="form-control form-control-sm" required>
            </div>
            @error('name')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
            <div class="d-flex justify-content-end gap-2">
                <button type="submit" class="btn btn-sm btn-success">Update</button>
                <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Back</a>
              
            </div>
        </form>
    </div>
</div>




@endsection