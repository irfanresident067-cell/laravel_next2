<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk Baru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
</head>
<body class="app-default">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Produk Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('produks.store') }}" method="POST">
                    @include('produks._form')
                </form>
            </div>
        </div>
    </div>
</body>
</html>
