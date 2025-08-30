<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="{{ asset('metronic/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <h1>Halo Admin!</h1>
        <p>Selamat datang di dashboard admin.</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
