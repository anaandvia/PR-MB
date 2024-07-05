<?php
// include database connection file
include '../koneksi.php';
    $judul = htmlspecialchars($_POST['judul']);
    $isi_peraturan = htmlspecialchars($_POST['isi_peraturan']);
    $sql = "UPDATE peraturan SET judul='$judul', isi_peraturan='$isi_peraturan' WHERE id_peraturan =1";
    $result = mysqli_query($koneksi,$sql);
        if($result){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/peraturan.php';</script>";
        }else{
            echo "<script>alert('Data gagal diupdate.');window.location='../view/peraturan.php';</script>";
            die ("Query gagal dijalankan: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
        }
?>