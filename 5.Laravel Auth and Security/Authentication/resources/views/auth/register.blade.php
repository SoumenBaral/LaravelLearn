<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h3>Create Your Account</h3>
    <p>It's quick and easy</p>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" value="{{old('password')}}" placeholder="Password">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="">
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="/login">Login</a></p>
</body>
</html>
