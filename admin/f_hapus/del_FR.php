<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }

    $id_FR = $_POST['datadel'];
    $sql = "DELETE FROM fasilitas_ruangan WHERE id_FR ='$id_FR'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil dihapus.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal dihapus.');window.location='../view/f_ruangan.php?id=".$id."';</script>";
        }
?>