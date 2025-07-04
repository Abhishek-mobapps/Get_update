<!DOCTYPE html>
<html>
<head><title>Admin Password Reset Request</title></head>
<body>
<h2>Reset Admin Password</h2>

@if (session('status'))
    <div style="color:green">{{ session('status') }}</div>
@endif

@if ($errors->any())
    <div style="color:red">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.password.email') }}">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>
    <button type="submit">Send Reset Link</button>
</form>

<p><a href="{{ route('admin.login') }}">Login</a></p>
</body>
</html>
