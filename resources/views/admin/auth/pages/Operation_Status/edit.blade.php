@extends('admin.auth.dashboard')

@section('content')
<div class="container">
    <h4>Edit Operation Status</h4>

    <form action="{{ route('admin.operation-status.update', $status) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name <span class="text-danger">*</span></label>
            <input type="text" name="name" value="{{ old('name', $status->name) }}" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select form-select-sm">
                    <option value="1" {{ old('status', $status->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $status->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.operation-status.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
