<?php
// include database connection file
include '../koneksi.php';
    $id_lantai = $_POST['datadel'];
    $no_lantai = $_POST['no_lantai'];
    $sql = "DELETE FROM lantai WHERE id_lantai ='$id_lantai'";
    $sql2 = "SELECT * FROM ruangan WHERE lantai = '$no_lantai'";
    $result = mysqli_query($koneksi,$sql2);
    $cek1 = mysqli_num_rows($result);
        if($cek1 == 0){
            $result2 = mysqli_query($koneksi,$sql);
            if($result2){
            echo "<script>alert('Data berhasil dihapus.');window.location='../view/lt.php';</script>";
            }else{
                echo "<script>alert('Data gagal dihapus.');window.location='../view/lt.php';</script>";
            }
        }else{  
            echo "<script>alert('Data gagal dihapus , Data Lantai masih memiliki Ruangan.');window.location='../view/lt.php';</script>";
        }
?>