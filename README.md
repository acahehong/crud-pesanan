# CRUD Data Pesanan - Laravel 12

## Deskripsi

Aplikasi CRUD Data Pesanan berbasis Laravel 12 yang digunakan untuk mengelola data pesanan pelanggan. Aplikasi ini memiliki fitur Create, Read, Update, dan Delete.

## Fitur

* Tambah Data Pesanan (Create)
* Tampilkan Data Pesanan (Read)
* Edit Data Pesanan (Update)
* Hapus Data Pesanan (Delete)
* Tampilan sederhana menggunakan CSS
* Navbar sederhana

## Teknologi Yang Digunakan

* Laravel 12
* PHP
* MySQL
* HTML
* CSS

## Struktur Database

Tabel: pesanans

| Field           | Type      |
| --------------- | --------- |
| id              | bigint    |
| nama_pelanggan  | varchar   |
| produk          | varchar   |
| jumlah          | integer   |
| harga           | decimal   |
| tanggal_pesanan | date      |
| created_at      | timestamp |
| updated_at      | timestamp |

## Instalasi

### 1. Clone Project

```bash
git clone project-laravel
```

### 2. Masuk Folder Project

```bash
cd project-laravel
```

### 3. Install Dependency

```bash
composer install
```

### 4. Copy File Environment

```bash
cp .env.example .env
```

### 5. Generate Key

```bash
php artisan key:generate
```

### 6. Buat Database

Buat database di phpMyAdmin dengan nama:

```
crud_pesanan
```

### 7. Jalankan Migration

```bash
php artisan migrate
```

### 8. Jalankan Server

```bash
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000/pesanan
```

## Struktur Folder

```
app/
 ├── Models/
 │   └── Pesanan.php
 │
 ├── Http/
     └── Controllers/
         └── PesananController.php

resources/
 └── views/
     └── pesanan/
         ├── index.blade.php
         ├── create.blade.php
         └── edit.blade.php

public/
 └── css/
     └── style.css
```

## Route

File: routes/web.php

```php
Route::resource('pesanan', PesananController::class);
```

## Controller

File: PesananController.php

CRUD Method:

* index() → Menampilkan data
* create() → Form tambah
* store() → Simpan data
* edit() → Form edit
* update() → Update data
* destroy() → Hapus data

## Tampilan

Aplikasi memiliki:

* Navbar
* Tabel Data Pesanan
* Form Tambah Pesanan
* Form Edit Pesanan

## Author

Nama : Putri Amelia Fasya
Kelas : A3
Project : CRUD Laravel Data Pesanan


