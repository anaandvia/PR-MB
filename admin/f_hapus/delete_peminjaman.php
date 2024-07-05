<?php
// include database connection file
include '../koneksi.php';
$id_peminjaman = $_POST['datadel'];
$sql = "DELETE a.*, b.* FROM peminjaman a JOIN detail_acara b ON a.id_peminjaman = b.id_peminjaman WHERE a.id_peminjaman = '$id_peminjaman'";
$result = mysqli_query($koneksi,$sql );

if($result){
    echo "<script>alert('Data berhasil dihapus.');window.location='../view/peminjaman.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus.');window.location='../view/peminjaman.php';</script>";
}
?>