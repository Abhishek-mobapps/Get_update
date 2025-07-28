<form method="POST" action="{{ route('userlogin') }}">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <label><input type="checkbox" name="remember"> Remember Me</label>

    <button type="submit">Sign In</button>
</form>

<a href="{{ route('userregister') }}">Create one</a>
