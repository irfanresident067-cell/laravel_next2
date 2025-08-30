<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard User</title>
    <link href="{{ asset('metronic/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <h1>Halo User!</h1>
        <p>Selamat datang di dashboard user.</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
