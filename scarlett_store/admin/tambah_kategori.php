<?php
include '../auth/cek_login.php';
include '../backend/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $query = mysqli_query($conn, "INSERT INTO categories (name) VALUES ('$nama')");
    if ($query) {
        header("Location: kategori.php");
        exit;
    } else {
        echo "Gagal menambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori - Scarlett Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #fff0f5;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            width: 220px;
            background-color: #ff5da2;
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 30px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #ff80b3;
        }

        .main-content {
            margin-left: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ffcce5;
            width: 400px;
            text-align: center;
        }

        .form-container h1 {
            color: #d63384;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #99004d;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffb6c1;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #e754a6;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="index.php">Dashboard</a>
    <a href="produk.php">Produk</a>
    <a href="kategori.php">Kategori</a>
    <a href="transaksi.php">Transaksi</a>
    <a href="pesanan.php">Pesanan</a>
    <a href="pengguna.php">Pengguna</a>
    <a href="log.php">Log</a>
    <a href="laporan.php">Laporan</a>
    <a href="../auth/logout.php">Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="form-container">
        <h1>Tambah Kategori</h1>
        <form method="POST">
            <div class="form-group">
                <label>Nama Kategori:</label>
                <input type="text" name="nama" required>
            </div>
            <button type="submit" name="submit" class="btn">Simpan</button>
        </form>
    </div>
</div>

</body>
</html>