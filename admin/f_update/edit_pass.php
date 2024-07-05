<?php
    include "../koneksi.php";
    error_reporting(0);
    //proses ganti password
    $username        = $_POST['username'];
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konf_password    = $_POST['konf_password'];
    //cek old password
    $query = "SELECT * FROM peminjam WHERE username='$username'";
    $sql = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($sql);
    $v_pass = password_verify($password_lama,$data['password']);
    // jika pass tidak sesuai
    if ($v_pass != true) {
        echo "<script>alert('Password tidak sesuai , Ulang Kembali!!.');window.location='../view/e_profile.php';</script>";
    }
    //validasi input konfirm password
    else if ($password_baru != $konf_password) {
        echo "<script>alert('Password baru tidak sama , Ulang Kembali!!.');window.location='../view/e_profile.php';</script>";
    }
    else {
    //update data
    $e_password = password_hash($password_baru, PASSWORD_DEFAULT);
    $query2 = "UPDATE peminjam SET password='$e_password' WHERE username='$username'";
    $sql2 = mysqli_query ($koneksi,$query2);
    //setelah berhasil update
    if ($sql2) {
        echo "<script>alert('Password Berhasil Diubah.');window.location='../view/e_profile.php';</script>";   
    } else {
        echo "<script>alert('Password Gagal Diubah');window.location='../view/e_profile.php';</script>";   
    }
    }
?>