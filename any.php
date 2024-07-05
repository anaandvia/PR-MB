<?php
	error_reporting(0);
	session_start();
	
    $level = $_SESSION['level'];
	if ($level=="peminjam") {
		header ('location:user/view/dashboard.php');
	}
	else if ($level=="admin") {
		header ('location:admin/view/index.php');
	}else {
		echo '<script language="javascript">alert("Silahkan Login Terlebih Dahulu!"); document.location="admin/view/login.php";</script>';
	}
?>