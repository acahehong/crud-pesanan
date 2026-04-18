<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    Sistem Manajemen Pesanan
</div>

<div class="container">
    <div class="card">
        <h2>Data Pesanan</h2>

        <a href="/pesanan/create" class="btn btn-tambah">
            Tambah Pesanan
        </a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>

            @foreach($pesanan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_pelanggan }}</td>
                <td>{{ $p->produk }}</td>
                <td>{{ $p->jumlah }}</td>
                <td>{{ $p->harga }}</td>
                <td>{{ $p->tanggal_pesanan }}</td>
                <td>
                    <a href="/pesanan/{{ $p->id }}/edit" class="btn btn-edit">
                        Edit
                    </a>

                    <form action="/pesanan/{{ $p->id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-hapus">Hapus</button>
                    </form>

                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>

</body>
</html>