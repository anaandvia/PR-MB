<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }
    $id_DR = $_POST['datadel'];
    $sql = "DELETE FROM detail_ruangan WHERE id_DR ='$id_DR'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil dihapus.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal dihapus.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }
?>