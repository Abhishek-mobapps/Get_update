@extends('admin.auth.dashboard')

@section('content')
<div class="container mt-4">
    <h4>Add {{ ucfirst($title ?? 'Sector') }}</h4>

    <form action="{{ route('admin.sectors.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">{{ ucfirst($title ?? 'Sector') }} Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('admin.sectors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

