@extends('admin.auth.dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">Edit Category</div>
        <div class="card-body">
            <form action="{{ route('admin.sectors.update', $sector) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name (English)</label>
                        <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name', $sector->name) }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Name (Italic)</label>
                        <input type="text" name="name_it" class="form-control form-control-sm" value="{{ old('name_it', $sector->name_it) }}">
                        @error('name_it') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.sectors.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
