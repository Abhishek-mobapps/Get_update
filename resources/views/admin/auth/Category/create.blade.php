@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Category</h5>
            <a href="{{ route('admin.category.index') }}" class="btn btn-light btn-sm">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
