<?php
session_start();
include '../../admin/koneksi.php';

$user = $_SESSION['username'];
if(!isset($_SESSION['level'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../../admin/view/login.php";</script>';
}
$query = "SELECT a.* , b.* FROM jurusan b JOIN peminjam a ON b.id_jurusan=a.id_jurusan WHERE nim ='$user'";
	$sql = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($sql);
	$peminjam = $data['id_peminjam'];
?>