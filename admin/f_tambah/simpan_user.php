<?php 
include '../koneksi.php';
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$id_jurusan = htmlspecialchars($_POST['id_jurusan']);
$role = htmlspecialchars($_POST['role']);
$no_tlp = htmlspecialchars($_POST['no_tlp']);
$level = 'peminjam';
$foto_u = 'pp.png';
$input = mysqli_query($koneksi,"INSERT INTO peminjam VALUES ('','$nim','$nama','$id_jurusan','$email','$no_tlp','$role','$nim','$nim','$foto_u','$level')");

if($input){
    echo "<script>alert('Data berhasil disimpan.');window.location='../view/user.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan.');window.location='../view/user.php';</script>";
}
?>