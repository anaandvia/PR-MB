<?php
    include "../koneksi.php";
    error_reporting(0);
    //proses ganti password
    
    $code = $_POST['code'];
    $nim                = $_POST['nim'];
    $password_baru      = $_POST['password'];
    $konf_password      = $_POST['k_password'];

    //validasi input konfirm password
    if ($password_baru != $konf_password) {
        echo "<script>alert('Password Tidak Sama Ulangi.');window.location='../view/ganti_password.php?code=$code';</script>";   
    }
    else {
    //update data
    $e_password = password_hash($password_baru, PASSWORD_DEFAULT);
    $query2 = "UPDATE peminjam SET password='$e_password' WHERE nim='$nim'";
    $sql2 = mysqli_query ($koneksi,$query2);
    //setelah berhasil update
    if ($sql2) {
        echo "<script>alert('Password Berhasil Diubah.');window.location='../view/login.php';</script>";   
    } else {
        echo "<script>alert('Password Gagal Diubah');window.location='../view/login.php';</script>";   
    }
    }
?>