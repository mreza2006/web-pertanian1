<?php
require "koneksi-projek.php";

$alat = tampil("SELECT * FROM alat order by id_alat desc");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>ALAT</title>
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
    <div class="container">
        <h1>Tabel Alat</h1>
        <a href="tambah_data.php" class="add-button">Tambah Data</a><br><br>
        <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Harga Alat</th>
                    <th>Jumlah Alat</th>
                    <th>Gambar Alat</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($alat as $alt):
                    $id = $alt["id_alat"] ?>
                    <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <td>
                            <?= $alt["nama_alat"]; ?>
                        </td>
                        <td>
                            <?= $alt["harga_alat"]; ?>
                        </td>
                        <td>
                            <?= $alt["jumlah_alat"]; ?>
                        </td>
                        <td><img src="foto/<?= $alt["gambar_alat"]; ?>" alt="gambar"></td>
                        <td class="action-buttons">
                            <a href="delete-alat.php?deleteid_alat=<?= $id ?>">Hapus</a>||
                            <a href="ubah-data-alat.php?ubahid_alat=<?= $id ?>">Ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>