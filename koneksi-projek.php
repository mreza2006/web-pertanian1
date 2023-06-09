<?php
$server = "localhost";
$user = "root";
$pass = "";
$nama_db = "pertanian";

$conn = mysqli_connect($server, $user, $pass, $nama_db) or die(mysqli_error($conn));

function tampil($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)) {
        $rows[] = $data;
    }

    return $rows;

}
function tambahData($data){
    global $conn;
    $nama = $data["nama_alat"];
    $harga = $data["harga_alat"];
    $jumlah = $data["jumlah_alat"];
    $gambar = uploadgambar();
    if (!$gambar){
        return false;
    }

    mysqli_query($conn, "INSERT INTO alat VALUES ('','$nama','$harga','$jumlah','$gambar')");

    return mysqli_affected_rows($conn);
}

function ubahData($data, $id) {
    global $conn ;
    $nama = $data ["nama_alat"];
    $harga = $data ["harga_alat"];
    $jumlah = $data ["jumlah_alat"];
    $gambarlama = $data["gambarlama"];

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = uploadgambar();
        if (file_exists('foto/' . $gambarlama)) {
            unlink('foto/' . $gambarlama);
        }
    }

    mysqli_query($conn, " UPDATE alat SET nama_alat = '$nama', harga_alat = '$harga', jumlah_alat = '$jumlah', gambar_alat  = '$gambar' WHERE id_alat = '$id'");

    return mysqli_affected_rows($conn);
}
function tambahDatatransaksi($data){
    global $conn;
    $qty = $data["qty"];
    $nominal = $data["nominal"];
    $kategori = $data["kategori"];
    $tanggalsewa = $data["tanggal_sewa"];
    $tanggal = $data["tanggal_pengembalian"];
    $id = $data["id_alat"];
    $gambar = uploadgambar();
    if (!$gambar){
        return false;
    }
    

    mysqli_query($conn, "INSERT INTO transaksi VALUES ('','$qty','$nominal','$kategori','$tanggalsewa','$tanggal','$id','$gambar')");

    return mysqli_affected_rows($conn);
}

function ubahDatatransaksi($data, $id) {
    global $conn ;
    $qty = $data ["qty"];
    $nominal = $data ["nominal"];
    $kategori = $data ["kategori"];
    $tanggalsewa = $data["tanggal_sewa"];
    $tanggal = $data["tanggal_pengembalian"];
    $id = $data["id_alat"];
    $gambarlama = $data["gambarlama"];

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = uploadgambar();
        if (file_exists('foto/' . $gambarlama)) {
            unlink('foto/' . $gambarlama);
        }
    }

    mysqli_query($conn, " UPDATE transaksi SET qty = '$qty', nominal = '$nominal', kategori = '$kategori', tanggal_sewa = '$tanggalsewa', tanggal_pengembalian = '$tanggal', id_alat = '$id', gambar_alat = '$gambar' WHERE id_alat = '$id'");

    return mysqli_affected_rows($conn);
}
function uploadgambar()
{
    
    $namafile = $_FILES["gambar"]["name"];
    $ukuranfile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpname = $_FILES["gambar"]["tmp_name"];

    if ($error === 4) {
        echo "<script>
            alert('File Belum Di upload !!');
        </script>";
        return false;
    }

    $ekstensivalid = array("jpeg", "jpg", "png");
    $ekstensifile = explode(".", $namafile);
    $ekstensifile = strtolower(end($ekstensifile));

    if (!in_array($ekstensifile, $ekstensivalid)) {
        echo "<script>
            alert('Ekstensi File tidak valid');
        </script>";
        return false;
    }

    if ($ukuranfile > 15000000) {
        echo "<script>
            alert('Ukuran File terlalu besar');
        </script>";
        return false;
    }

    $namafilebaru = $namafile;
    // $namafilebaru .= '.';
    // $namafilebaru .= $ekstensifile;

    move_uploaded_file($tmpname, "foto/" . $namafilebaru);

    return $namafilebaru;
}