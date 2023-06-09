<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Alat">
        <br>
        <input type="text" name="harga" placeholder="harga">
        <br>
        <input type="number" name="jumlah" placeholder="Jumlah">
        <br>
        <input type="file" name="gambar">
        <br>
        <input type="submit" value="Tambah" name="submit">
    </form>
</body>

<?php
include("koneksi-projek.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $file = $_FILES['gambar'];
    $filename = $file['name'];
    $tmp_name = $file['tmp_name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $allowed_extensions = array('jpg', 'png', 'jpeg');

    if(!in_array($file_extension, $allowed_extensions)){
        echo 'Format File Tidak Diizinkan';
    }else{
        $newname = 'gambar' . time() . '.' . $file_extension;
        $destination = './gambar/' . $newname;

        if(move_uploaded_file($tmp_name, $destination)){
            $insert = mysqli_query($conn, "INSERT INTO fasilitas (nama_alat, harga_alat, jumlah_alat, gambar_alat) VALUES (
                '".$nama."',
                '".$harga."',
                '".$jumlah."',
                '".$newname."')");

            if($insert){
                echo '<script>alert("Berhasil")</script>';
                echo '<script>window.location="view.php"</script>';
            }else {
                echo '<script>alert("Gagal Ditambahkan")</script>';
            }
        }else{
            echo 'Gagal memindahkan file';
        }
    }
}
?>
</html>