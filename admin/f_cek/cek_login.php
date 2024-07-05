<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['username']));
$password = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['password']));

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM peminjam WHERE username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	// ambil data
	$data = mysqli_fetch_array($login);
	// cek jika user login sebagai admin
	$v_pass = password_verify($password,$data['password']);
	if($v_pass){
		if($data['v_email']==1){
			if($data['level']=="admin"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "admin";
				// alihkan ke halaman dashboard admin
				header("location:../view/index.php");
			// cek jika user login sebagai peminjam
			}else if($data['level']=="peminjam"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "peminjam";
				// alihkan ke halaman dashboard peminjam
				header("location:../../user/view/dashboard.php");
			}else{
				// alihkan ke halaman login kembali
				header("location:../view/login.php?gagal");
			}	
		}else{
			echo "<script>alert('Email Belum Terverifikasi');window.location='../view/login.php';</script>";
		}
	}else{
		header("location:../view/login.php?gagal");
	}
}else{
	header("location:../view/login.php?gagal");
}
?>