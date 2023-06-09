<?php
include "koneksi-projek.php";
session_start();

if (isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM table_admin where nama_admin = '$username' and pass = '$password' ";
    $result = mysqli_query($conn, $sql);
    $return = mysqli_fetch_array($result);

    if ($return) {
        $_SESSION['id_admin'] = $return['id_admin'];
        $_SESSION['nama_admin'] = $return['nama_admin'];
        $_SESSION['pass'] = $return['pass'];



        echo "<script>alert('Selamat datang $username');
                document.location.href = 'view-alat.php'</script>";
    } else {
        echo "<script>alert('Username tidak teradaftar');
            document.location.href = 'login.php'</script>";
    }

}


?>