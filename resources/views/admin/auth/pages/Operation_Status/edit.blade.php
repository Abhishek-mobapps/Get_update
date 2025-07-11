@extends('admin.auth.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">Edit Operation</div>
        <div class="card-body">
            <form action="{{ route('admin.operation-status.update', $status) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $status->name) }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select form-select-sm">
                            <option value="1" {{ $status->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$status->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
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
