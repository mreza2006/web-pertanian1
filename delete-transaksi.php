<?php
include 'koneksi-projek.php';

if (isset($_GET['deleteid_transaksi'])) {   
    $id = $_GET['deleteid_transaksi'];
    $sql = "DELETE FROM `transaksi` WHERE id_transaksi = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header('Location: view-transaksi.php');
        exit();
    } else {
        die(mysqli_error($conn));
    }
}
?>
