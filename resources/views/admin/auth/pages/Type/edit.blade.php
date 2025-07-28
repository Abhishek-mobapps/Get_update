@extends('admin.auth.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">Edit Type</div>
        <div class="card-body">
            <form action="{{ route('admin.type.update', $type) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Name (English)</label>
                        <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $type->name) }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Name (Italic)</label>
                        <input type="text" name="name_it" class="form-control form-control-sm" value="{{ old('name_it', $type->name_it) }}" required>
                        @error('name_it') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select form-select-sm">
                            <option value="1" {{ $type->status ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ !$type->status ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.type.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
