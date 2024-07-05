<?php
// include database connection file
include '../koneksi.php';
$id_fasilitas = htmlspecialchars($_POST['id_fasilitas']);
$nama_fasilitas = htmlspecialchars($_POST['nama_fasilitas']);
$detail_fasilitas = htmlspecialchars($_POST['detail_fasilitas']);

$result = mysqli_query($koneksi, "UPDATE fasilitas SET nama_fasilitas='$nama_fasilitas',detail_fasilitas='$detail_fasilitas' WHERE id_fasilitas='$id_fasilitas'");

if($result){
    echo "<script>alert('Data berhasil diubah.');window.location='../view/fasilitas.php';</script>";
}else{
    echo "<script>alert('Data gagal diubah.');window.location='../view/fasilitas.php';</script>";
}
?>