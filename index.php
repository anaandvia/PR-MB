<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="user/view/asset/css/main.css" />
	<link rel="stylesheet" href="user/view/asset/css/bootstrap.min.css" />
	<link rel="icon" href="admin/view/asset/img/Logo PR-MB-04.png">
	<title>PR-MB</title>
</head>

<body class="landing is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a id="mybutton" href="any.php">Dashboard</a>
								</li>
								<li><a href="#peraturan">Peraturan</a></li>
								<li><a href="admin/view/login.php">Log In</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<strong>
					<h2>PR-MB</h2>
					<h3>Peminjaman Ruangan Jurusan Manajemen Bisnis</h3>
				</strong>
				<p>Anda Dapat Melakukan<br />
					Peminjaman Ruangan <br />
					Secara Cepat Tanpa Ribet</p>
			</div>
		</section>
		<section id="peraturan">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Content Row -->
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="form-group row">
								<div class="col-lg-12">
									<div class="row">
										<?php 
                                            include 'admin/koneksi.php';
                                            $sql5 = mysqli_query($koneksi,'SELECT*FROM peraturan');
                                            $data5 = mysqli_fetch_array($sql5);
                                            ?>
										<div class="col-lg-11 p-5 ml-5 mt-5 rounded" id="isi">
											<strong class="h3"
												style="font-family: 'Jost', sans-serif;"><?=$data5['judul']?></strong>
											<p align="left"><?=htmlspecialchars_decode($data5['isi_peraturan']) ?></p>
										</div>
									</div>
								</div>
							</div>
					</div>
					<!-- End of Main Content -->
				</div>
		</section>
		<!-- Footer -->
		<footer id="footer">
			<ul>
				<li>Alamat <br> Jl. Ahmad Yani Batam Kota, Kota Batam, Kepulauan Riau, Indonesia
					<br> Phone : +62-778-469858 Ext.1017 <br>Fax : +62-778-463620 <br> Email : info@polibatam.ac.id</li>
			</ul>
			<ul class="icons">
				<li><a href="https://www.facebook.com/polibatamofficial/" class="icon brands fa-facebook-f"><span
							class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/polibatamofficial/" class="icon brands fa-instagram"><span
							class="label">Instagram</span></a></li>
				<li><a href="https://www.youtube.com/channel/UCxKsDnDYt30bMdXyakD_ZCw"
						class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; PR-MB</li>
				</li>
			</ul>
		</footer>

	</div>
	<style>
		body {
			color: white;
		}

		#isi {
			background-color: #1d242a;
		}

		a:hover {
			text-decoration: none;
		}
	</style>
	<!-- Scripts -->
	<script src="user/view/asset/js/jquery.min.js"></script>
	<script src="user/view/asset/js/jquery.scrollex.min.js"></script>
	<script src="user/view/asset/js/jquery.scrolly.min.js"></script>
	<script src="user/view/asset/js/browser.min.js"></script>
	<script src="user/view/asset/js/breakpoints.min.js"></script>
	<script src="user/view/asset/js/util.js"></script>
	<script src="user/view/asset/js/main.js"></script>
</body>

</html>