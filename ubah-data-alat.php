<?php
require 'koneksi-projek.php';
 
$id = $_GET["ubahid_alat"];
$query = tampil("SELECT * FROM alat WHERE id_alat ='$id'")[0];
//var_dump($query)
if(isset($_POST["ubah"])){
    if(ubahData($_POST, $id) > 0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="view-alat.php"</script>';
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
    <title>Ubah Data Alat</title>
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
    <h1>Ubah Data Alat</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama alat:</label>
        <input type="text" name="nama_alat" id="nama" autocomplete="off" placeholder="Masukkan Nama ..." value="<?= $query["nama_alat"];?>">
        <label for="harga">Harga alat:</label>
        <input type="text" name="harga_alat" id="harga_alat" autocomplete="off" placeholder="Masukkan Harga ..." value="<?= $query["harga_alat"];?>">
        <label for="jumlah">Jumlah alat:</label>
        <input type="text" name="jumlah_alat" id="jumlah_alat" autocomplete="off" placeholder="Masukkan Jumlah Alat ..." value="<?= $query["jumlah_alat"];?>">
        <label for="gambar">Upload Gambar alat:</label><br>
        <img src="foto/<?= $query["gambar_alat"]?>" alt="gambar" width="200">
        <input type="file" name="gambar" id="gambar">
        <input type="hidden" name="gambarlama" value="<?= $query["gambar_alat"];?>">
        <button type="submit" name="ubah">Ubah Data</button>
        <a href="view-alat.php" class="button">Kembali</a>
    </form>
</body>

</html>
