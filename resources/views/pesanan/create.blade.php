<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    Sistem Manajemen Pesanan
</div>

<div class="container">
    <div class="card">

        <h2>Tambah Pesanan</h2>

        <form action="{{ route('pesanan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" required>
        </div>

        <div class="form-group">
            <label>Produk</label>
            <input type="text" name="produk" required>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" required>
        </div>

        <div class="form-group">
            <label>Tanggal Pesanan</label>
            <input type="date" name="tanggal_pesanan" required>
        </div>

        <br>

        <button type="submit" class="btn btn-tambah">
            Simpan
        </button>

        <a href="/pesanan" class="btn btn-edit">
            Kembali
        </a>

        </form>

    </div>
</div>

</body>
</html>