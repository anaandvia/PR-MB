<?php
// include database connection file
include '../koneksi.php';
    $id_peminjam = $_POST['deladm'];
    $sql = "DELETE FROM peminjam WHERE id_peminjam ='$id_peminjam'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil dihapus.');window.location='../view/admin.php';</script>";
        }else{  
            echo "<script>alert('Data gagal dihapus.');window.location='../view/admin.php';</script>";
        }
?>