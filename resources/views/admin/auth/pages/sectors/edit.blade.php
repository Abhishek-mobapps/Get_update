@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h4>Edit {{ ucfirst($title ?? 'Sector') }}</h4>

    <form action="{{ route('admin.sectors.update', $sector) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ ucfirst($title ?? 'Sector') }} Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $sector->name) }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.sectors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
