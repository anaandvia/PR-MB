<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }
    $id_ruangan = $_POST['id_ruangan'];
    $fungsi = $_POST['fungsi'];
    $keperluan = $_POST['keperluan'];
    $PIC = $_POST['PIC'];
    $PIC2 = $_POST['PIC2'];
    $KoorLAB = $_POST['KoorLAB'];
    $sql = "INSERT INTO detail_ruangan VALUES ('','$id_ruangan','$fungsi','$keperluan','$PIC','$PIC2','$KoorLAB')";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal diupdate.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }
?>