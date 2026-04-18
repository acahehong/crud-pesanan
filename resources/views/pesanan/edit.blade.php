<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    Sistem Manajemen Pesanan
</div>

<div class="container">
    <div class="card">

        <h2>Edit Pesanan</h2>

        <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" 
                   value="{{ $pesanan->nama_pelanggan }}" required>
        </div>

        <div class="form-group">
            <label>Produk</label>
            <input type="text" name="produk" 
                   value="{{ $pesanan->produk }}" required>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" 
                   value="{{ $pesanan->jumlah }}" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" 
                   value="{{ $pesanan->harga }}" required>
        </div>

        <div class="form-group">
            <label>Tanggal Pesanan</label>
            <input type="date" name="tanggal_pesanan" 
                   value="{{ $pesanan->tanggal_pesanan }}" required>
        </div>

        <br>

        <button type="submit" class="btn btn-tambah">
            Update
        </button>

        <a href="/pesanan" class="btn btn-edit">
            Kembali
        </a>

        </form>

    </div>
</div>

</body>
</html>