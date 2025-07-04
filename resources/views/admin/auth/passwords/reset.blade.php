<!DOCTYPE html>
<html>
<head><title>Admin Password Reset</title></head>
<body>
<h2>Reset Password</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <label>Email:</label>
    <input type="email" name="email" value="{{ $email ?? old('email') }}" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" required><br>
    <button type="submit">Reset Password</button>
</form>
</body>
</html>
