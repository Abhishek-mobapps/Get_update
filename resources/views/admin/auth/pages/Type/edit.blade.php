{{-- @extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h6>Create Type</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.type.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-select">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-success">Create</button>
                <a href="{{ route('admin.type.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection --}}
@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Edit Type</h2>

    <form action="{{ route('admin.type.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $type->name) }}" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- <div class="mb-3">
            <label>Description (optional)</label>
            <textarea name="description" class="form-control">{{ old('description', $type->description) }}</textarea>
        </div> --}}

        <div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-select">
        <option value="1" {{ old('status', $type->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
        <option value="0" {{ old('status', $type->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
        <button class="btn btn-primary">Update Type</button>
         <a href="{{ route('admin.type.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
