<?php
session_start();
error_reporting(0);
include 'koneksi.php';

$user = $_SESSION['username'];
if(!isset($_SESSION['level'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.php";</script>';
}
$level = $_SESSION['level'];
if ($level!="admin") {

	echo '<script language="javascript">alert("Anda Tidak Punya Akses!"); document.location="../../index.php";</script>';
}

	$query = "SELECT a.* , b.* FROM jurusan b JOIN peminjam a ON b.id_jurusan=a.id_jurusan WHERE nim ='$user'";
	$sql = mysqli_query($koneksi,$query );
    $data = mysqli_fetch_array($sql);
?>