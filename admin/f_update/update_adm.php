<?php
// include database connection file
include '../koneksi.php';
$id_peminjam = $_POST['id_peminjam'];
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$id_jurusan = htmlspecialchars($_POST['id_jurusan']);
$role = htmlspecialchars($_POST['role']);
$no_tlp = htmlspecialchars($_POST['no_tlp']);
$result = mysqli_query($koneksi, "UPDATE peminjam SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',email='$email', no_tlp='$no_tlp', role='$role' WHERE id_peminjam='$id_peminjam'");

if($result){
    echo "<script>alert('Data berhasil diubah.');window.location='../view/admin.php';</script>";
}else{
    echo "<script>alert('Data gagal diubah.');window.location='../view/admin.php';</script>";
}
?>