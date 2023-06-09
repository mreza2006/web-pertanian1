<?php
include 'koneksi-projek.php';

if (isset($_GET['deleteid_alat'])) {   
    $id = $_GET['deleteid_alat'];
    $sql = "DELETE FROM `alat` WHERE id_alat = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header('location:view-alat.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>