<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }

    $id_FR = $_POST['id_FR'];
    $nama_fasilitas = $_POST['nama_fasilitas'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];
    $sql = "UPDATE fasilitas_ruangan SET id_fasilitas='$nama_fasilitas' , jumlah='$jumlah' , status_fr ='$status' WHERE id_FR='$id_FR'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal diupdate.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }
?>