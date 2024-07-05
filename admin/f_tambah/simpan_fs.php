<?php 
include '../koneksi.php';
$nama_fasilitas = htmlspecialchars($_POST['nama_fasilitas']);
$detail_fasilitas = htmlspecialchars($_POST['detail_fasilitas']);

$input = mysqli_query($koneksi,"INSERT INTO fasilitas VALUES ('','$nama_fasilitas','$detail_fasilitas')");

if($input){
    echo "<script>alert('Data berhasil disimpan.');window.location='../view/fasilitas.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan.');window.location='../view/fasilitas.php';</script>";
}
?>