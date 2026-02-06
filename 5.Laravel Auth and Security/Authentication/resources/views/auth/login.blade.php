<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
<h3>Login you Account</h3>
<p><small>It's quick and easy</small></p>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('login') }}" method="POST">
    @csrf
    <label>Email</label>
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
    <label>Password</label>
    <input type="password" name="password" value="{{old('password')}}" placeholder="Password">
    <input type="checkbox" name="remember"> Remember me
    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="/register">Register</a></p>
</body>
</html>
