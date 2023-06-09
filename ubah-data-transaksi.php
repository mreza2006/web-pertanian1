<?php
require 'koneksi-projek.php';
 
$id = $_GET["ubahid_transaksi"];
$query = tampil("SELECT * FROM transaksi WHERE id_transaksi ='$id'")[0];
//var_dump($query)
if(isset($_POST["ubah"])){
    if(ubahDatatransaksi($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="view-transaksi.php"</script>';
    }else{
        echo '<script>alert("Gagal mengubah")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Transaksi</title>
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
    <h1>Ubah Data Transaksi</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="qty">Qty:</label>
        <input type="text" name="qty" id="qty" autocomplete="off" placeholder="Masukkan Qty ..." value="<?= $query["qty"];?>">
        <label for="nominal">Nominal:</label>
        <input type="text" name="nominal" id="nominal" autocomplete="off" placeholder="Masukkan Nominal ..." value="<?= $query["nominal"];?>">
        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" autocomplete="off" placeholder="Masukkan Kategori ..." value="<?= $query["kategori"];?>">
        <label for="tanggal">Tanggal sewa:</label>
        <input type="date" name="tanggal_sewa" id="tanggal_sewa" autocomplete="off" placeholder="Masukkan Tanggal sewa ..." value="<?= $query["tanggal_sewa"];?>">
        <label for="tanggal">Tanggal pengembalian:</label>
        <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" autocomplete="off" placeholder="Masukkan Tanggal pengembalian ..." value="<?= $query["tanggal_pengembalian"];?>">
        <label for="id">Id alat:</label>
        <input type="text" name="id_alat" id="id_alat" autocomplete="off" placeholder="Masukkan Id alat ..." value="<?= $query["id_alat"];?>">
        <label for="gambar">Upload Gambar:</label><br>
        <img src="foto/<?= $query["gambar_alat"]?>" alt="gambar" width="200">
        <input type="file" name="gambar" id="gambar">
        <input type="hidden" name="gambarlama" value="<?= $query["gambar_alat"];?>">
        <button type="submit" name="ubah">Ubah Data</button>
        <a href="view-transaksi.php" class="button">Kembali</a>
    </form>
</body>

</html>
