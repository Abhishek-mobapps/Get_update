@extends('admin.auth.dashboard')

@section('content')
    <div class="container mt-4">
        <h2>Create Type</h2>

        <form action="{{ route('admin.type.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- <div class="mb-3">
            <label>Description (optional)</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div> --}}

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select form-select-sm">
                    <option value="1" {{ old('status', $type->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $type->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>

            </div>

            <button class="btn btn-success">Create Type</button>
        </form>
    </div>
@endsection
