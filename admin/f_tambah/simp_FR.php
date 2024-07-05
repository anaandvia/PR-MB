<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }

    $nama_fasilitas = $_POST['nama_fasilitas'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];
    $sql = "INSERT INTO fasilitas_ruangan VALUES ('','$nama_fasilitas','$id','$jumlah','$status')";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal diupdate.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }
?>