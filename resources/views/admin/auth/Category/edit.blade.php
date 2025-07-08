@extends('admin.auth.dashboard')
@section('content')
<div class="container mt-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-primary text-white">Edit Category</div>
        <div class="card-body">
            <form action="{{ route('admin.category.update', $category) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $category->name) }}" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select form-select-sm">
                        <option value="1" {{ $category->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$category->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
