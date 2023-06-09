<?php
require "koneksi-projek.php";

$transaksi = tampil("SELECT transaksi.id_transaksi, transaksi.qty, transaksi.nominal, transaksi.kategori, transaksi.tanggal_sewa, transaksi.tanggal_pengembalian, alat.nama_alat, transaksi.gambar_alat 
FROM transaksi
JOIN alat ON alat.id_alat = transaksi.id_alat
ORDER BY transaksi.id_transaksi");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSAKSI</title>
    <link rel="stylesheet" href="style.css">
    <style>
        nav {
            background-color: orange;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .menu li a:hover {
            background-color: #FF8C00;
        }

        .table-container {
            margin-top: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th,
        .table-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-container th {
            background-color: orange;
            color: white;
        }

        .table-container td img {
            width: 100px;
        }


        .action-buttons a {
            text-decoration: none;
            color: orange;
        }

        .action-buttons a:hover {
            color: orangered;
        }

        .add-button {
            display: inline-block;
            background-color: orange;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background-color: #FF8C00;
        }
        
    </style>
</head>

<body>
    <div class="nav">
        <nav>
            <div class="logo">ALOPAKTANI</div>
            <ul class="menu">
                <li><a href="beranda.php">Home</a></li>
                <li><a href="view-alat.php">Tabel Alat</a></li>
                <li><a href="view-transaksi.php">Tabel Transaksi</a></li>
            </ul>
        </nav>
    </div>
    <h1> Tabel Transaksi </h1>
    <a href="tambah-data-transaksi.php" class="add-button">Tambah Data</a><br><br>
    <div class="table-container">
        <table border="1" cellspacing="0" cellpading="3">
            <tr>
                <th>No</th>
                <th>Id transaksi</th>
                <th>Qty</th>
                <th>Nominal</th>
                <th>Kategori</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Pengembalian</th>
                <th>Nama Alat</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($transaksi as $alt):
                $id = $alt["id_transaksi"] ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $alt["id_transaksi"]; ?>
                    </td>
                    <td>
                        <?= $alt["qty"]; ?>
                    </td>
                    <td>
                        <?= $alt["nominal"]; ?>
                    </td>
                    <td>
                        <?= $alt["kategori"]; ?>
                    </td>
                    <td>
                        <?= $alt["tanggal_sewa"]; ?>
                    </td>
                    <td>
                        <?= $alt["tanggal_pengembalian"]; ?>
                    </td>
                    <td>
                        <?= $alt["nama_alat"]; ?>
                    </td>
                    <td><img src="foto/<?= $alt["gambar_alat"]; ?>" alt="gambar" width="100"></td>
                    <td class="action-buttons">
                        <a href="delete-transaksi.php?deleteid_transaksi=<?= $id ?>">Hapus</a>|
                        <a href="ubah-data-transaksi.php?ubahid_transaksi=<?= $id ?>">Ubah</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>