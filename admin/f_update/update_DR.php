<?php
// include database connection file
include '../koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }
    $id_DR = $_POST['id_DR'];
    $fungsi = $_POST['fungsi'];
    $keperluan = $_POST['keperluan'];
    $PIC = $_POST['PIC'];
    $PIC2 = $_POST['PIC2'];
    $KoorLAB = $_POST['KoorLAB'];
    $sql = "UPDATE detail_ruangan SET fungsi='$fungsi' , keperluan='$keperluan' , PIC ='$PIC', PIC2 ='$PIC2', KoorLAB ='$KoorLAB' WHERE id_DR='$id_DR'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil diupdate.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }else{  
            echo "<script>alert('Data gagal diupdate.');window.location='../view/detail_r.php?id2=".$id."';</script>";
        }
?>