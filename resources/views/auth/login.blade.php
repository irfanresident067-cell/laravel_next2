<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ asset('metronic/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
</body>
</html>
