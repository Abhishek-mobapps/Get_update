@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h4>Edit {{ ucfirst($title ?? 'Nation') }}</h4>

    <form action="{{ route('admin.nations.update', $nation) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ ucfirst($title ?? 'Nation') }} Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $nation->name) }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.nations.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
