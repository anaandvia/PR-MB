<?php
// include database connection file
include '../koneksi.php';
$id_fasilitas = $_POST['datadel'];
$sql = "DELETE FROM fasilitas WHERE id_fasilitas ='$id_fasilitas'";
$result = mysqli_query($koneksi,$sql );

if($result){
    echo "<script>alert('Data berhasil dihapus.');window.location='../view/fasilitas.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus.');window.location='../view/fasilitas.php';</script>";
}

?>