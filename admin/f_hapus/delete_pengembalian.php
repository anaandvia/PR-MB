<?php
// include database connection file
include '../koneksi.php';
$id = $_POST['id'];
$id_peminjaman = $_POST['id_peminjaman'];
$sql = "DELETE FROM pengembalian WHERE id = '$id'";
$result = mysqli_query($koneksi,$sql);
if($result){
    $sql2 = "DELETE a.*, b.* FROM peminjaman a JOIN detail_acara b ON a.id_peminjaman = b.id_peminjaman WHERE a.id_peminjaman = '$id_peminjaman'";
    $result2 = mysqli_query($koneksi,$sql2);
    if($result2){
    echo "<script>alert('Data berhasil dihapus.');window.location='../view/pengembalian.php';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus.');window.location='../view/pengembalian.php';</script>";
    }
}else{
    echo "<script>alert('Data gagal dihapus.');window.location='../view/pengembalian.php';</script>";
}
?>