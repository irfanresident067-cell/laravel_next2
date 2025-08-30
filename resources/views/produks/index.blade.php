<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
</head>
<body class="app-default">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Produk</h3>
                <div class="card-toolbar">
                    <a href="{{ route('produks.create') }}" class="btn btn-sm btn-primary">
                        Tambah Produk
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr>
                                <td>{{ $produk->id }}</td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>
                                    <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data produk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $produks->links() }}
                </div>

            </div>
        </div>
    </div>
</body>
</html>
