<?php
// include database connection file
include '../koneksi.php';
    $no_lantai = htmlspecialchars($_POST['no_lantai']);
    $sql2 = "SELECT * FROM ruangan WHERE lantai = '$no_lantai'";
    $sql = "INSERT INTO lantai VALUES ('','$no_lantai')";
    $result = mysqli_query($koneksi,$sql2);
    $cek1 = mysqli_num_rows($result);
        if($cek1 == 0){
            $result2 = mysqli_query($koneksi,$sql);
            if($result2){
            echo "<script>alert('Data berhasil disimpan.');window.location='../view/lt.php';</script>";
            }else{
                echo "<script>alert('Data gagal disimpan.');window.location='../view/lt.php';</script>";
            }
        }else{  
            echo "<script>alert('Data gagal disimpan , Data Lantai Sudah Ada.');window.location='../view/lt.php';</script>";
        }
?>