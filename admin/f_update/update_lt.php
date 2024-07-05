<?php
// include database connection file
include '../koneksi.php';
    $id_lantai = htmlspecialchars($_POST['id_lantai']);
    $no_lantai = htmlspecialchars($_POST['no_lantai']);
    $up_lantai = htmlspecialchars($_POST['up_lantai']);
    $sql = "UPDATE lantai SET no_lantai='$up_lantai' WHERE id_lantai ='$id_lantai'";
    $sql2 = "SELECT * FROM ruangan WHERE lantai = '$no_lantai'";
    $result = mysqli_query($koneksi,$sql2);
    $cek1 = mysqli_num_rows($result);
        if($cek1 == 0){
            $result2 = mysqli_query($koneksi,$sql);
            if($result2){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/lt.php';</script>";
            }else{
                echo "<script>alert('Data gagal diupdate.');window.location='../view/lt.php';</script>";
            }
        }else{  
            echo "<script>alert('Data gagal diupdate , Data Lantai masih memiliki Ruangan.');window.location='../view/lt.php';</script>";
        }
?>