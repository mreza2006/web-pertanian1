<?php
require "koneksi-projek.php";

if(isset($_POST["tambah"])){
    if(tambahDatatransaksi($_POST) > 0 ){
        echo "Tambah data berhasil";
        echo '<script>window.location="view-transaksi.php"</script>';
    }else{
        echo '<script>alert("Tidak bisa ditambahkan")</script>';
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button[type="submit"],
        a.button {
            display: inline-block;
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover,
        a.button:hover {
            background-color: #ff8c00;
        }

        a.button {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Transaksi</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="qty">Qty:</label>
        <input type="text" name="qty" id="qty" autocomplete="off" placeholder="Masukkan qty ...">
        <label for="nominal">Nominal:</label>
        <input type="text" name="nominal" id="nominal" autocomplete="off" placeholder="Masukkan nominal ...">
        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" autocomplete="off" placeholder="Masukkan kategori ...">
        <label for="tanggal">Tanggal sewa:</label>
        <input type="date" name="tanggal_sewa" id="tanggal_sewa" autocomplete="off" placeholder="Masukkan tanggal sewa ...">
        <label for="tanggal">Tanggal pengembalian:</label>
        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" autocomplete="off" placeholder="Masukkan tanggal pengembalian ...">
        <label for="id">Id alat:</label>
        <input type="text" name="id_alat" id="id_alat" autocomplete="off" placeholder="Masukkan id alat ...">
        <label for="gambar">Gambar alat:</label>
        <input type="file" name="gambar" id="gambar" autocomplete="off" placeholder="Masukkan gambar alat ...">
        <div>
            <button type="submit" name="tambah">Tambah Data</button>
            <a href="view-transaksi.php" class="button">Kembali</a>
        </div>
    </form>
</body>

</html>
