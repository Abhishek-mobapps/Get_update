@extends('admin.auth.dashboard')

@section('content')
<h1>Set Password for {{ $user->name }}</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" name="password" id="password" class="form-control" required minlength="8" />
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required minlength="8" />
    </div>

    <button type="submit" class="btn btn-success">Update Password & Send Email</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
</form>
@endsection
