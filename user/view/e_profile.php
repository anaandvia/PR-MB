<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../admin/view/asset/img/Logo PR-MB-04.png">
    <title>PR-MB | Edit Profile</title>

    <!-- Custom fonts for this template-->
    <link href="../../admin/view/asset/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;500&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/index.css">
    <!-- script -->
    <script type="text/javascript" src="asset/js/jquery.js"></script>

</head>

<body id="page-top">

    <!-- akses login -->
    <?php 
        include '../akses.php';
	?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
                <div class="sidebar-brand-icon ">
                    <img src="../../admin/view/asset/img/Logo PR-MB-02.png" style="width :80px;"></img>
                </div>
                <div class="sidebar-brand-text mx-3">PR-MB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../../index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Ruangan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Lantai</h6>
                        <?php
                            include '../../admin/koneksi.php';
                            $sql1 = mysqli_query($koneksi, "SELECT*FROM lantai ORDER by no_lantai ASC");
                            $no = 1;
                            while ($data1 = mysqli_fetch_array($sql1)) {
                            ?>
                        <a class="collapse-item" href="lt.php?id=<?=$data1['no_lantai']?>">Lantai
                            <?php echo $data1['no_lantai'];?></a>
                        <?php } ?>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="history.php">
                    <i class="fas fa-fw fa-history"></i>
                    <span>History</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="profile.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-4 static-top shadow"
                    style="background:linear-gradient(90deg, #164A41 6.67%, #4D774E 56.77%, #9DC88D 106.67%);">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 bg-warning">
                        <i class="fa fa-bars" style="color: white;"></i>
                    </button>
                    <a class="navbar-brand mr-auto" href="../../index.php">
                        <img src="asset/img/Logo-Polibatam.png" width="50px" alt="">
                    </a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-warning border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-warning text-white" type="button">
                                                <i class="fas fa-search fa-sm text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <?php
                                include "../../admin/koneksi.php";
                                $sql5     ="SELECT a.* , b.* , c.no_ruangan FROM peminjaman a 
                                JOIN pengembalian b ON b.id_peminjaman=a.id_peminjaman
                                JOIN ruangan c ON c.id_ruangan = a.id_ruangan
                                where a.id_peminjam = '$peminjam' AND a.status > 0";
                                $query5   = mysqli_query($koneksi,$sql5);
                                $count    = mysqli_num_rows($query5);
                                ?>
                                <!-- Counter - Alerts -->
                                <?php 
                                if ($count > 0){
                                echo "<span class='badge badge-danger badge-counter'>
                                    $count
                                </span>";
                                }else{
                                    echo "";
                                }
                                ?>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php
                                    while ($data5 = mysqli_fetch_array($query5)) {
                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="history.php">
                                    <div class='mr-3'>
                                        <div class='icon-circle bg-primary'>
                                            <i class='fas fa-arrow-down text-white'></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">
                                            <?php 
                                            if ($data5['status']==1 ){
                                                $tgl= $data5['tgl_acc'];
                                                $date = date('l, d-m-Y', strtotime($tgl));
                                                echo $date;
                                                echo "</div>
                                                <span>";
                                                echo "Requesh Peminjaman Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "<br><p style ='color:green;'>DI SETUJUI</p>";
                                            }else if($data5['status']==2){
                                                $tgl= $data5['tgl_acc'];
                                                $date = date('l, d-m-Y', strtotime($tgl));
                                                echo $date;
                                                echo "</div>
                                                <span>";
                                                echo "Requesh Peminjaman Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "<br><p style ='color:red;'>DI TOLAK</p>";
                                            }else if ($data5['status_kembali']==1){
                                                $tgl= $data5['tgl_acc_back'];
                                                $date = date('l, d-m-Y', strtotime($tgl));
                                                echo $date;
                                                echo "</div>
                                                <span>";
                                                echo "Pengembalian Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "<br><p style ='color:red;'>DI KONFIRMASI</p>";
                                            }else if ($data5['status_kembali'] == 0){
                                                if($data5['tgl_acc_back'] != "0000-00-00"){
                                                $tgl= $data5['tgl_acc_back'];
                                                $date = date('l, d-m-Y', strtotime($tgl));
                                                echo $date;
                                                echo "</div>
                                                <span>";
                                                echo "Pengembalian Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "<br><p style ='color:red;'>DI TOLAK</p>";
                                                }
                                            }
                                        
                                        ?>
                                            </span>
                                        </div>
                                        <?php } ?>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-white small"><?php echo $data['nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../../admin/view/asset/img/profile/<?php echo $data['foto_u']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid"
                    style="background-color: linear-gradient(90deg, #164A41 6.67%, #4D774E 56.77%, #9DC88D 106.67%)">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-white">My Profile</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="../f_aksi/update_profile.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="fotolama" id="fotolama" value="<?= $data['foto_u']?>">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                        <div class="row text-dark">
                                            <div class="col-sm-11 bg-white p-3 ml-3 rounded ">
                                                <div class="img">
                                                    <img class="img-profile rounded-circle" width="50%"
                                                        src="../../admin/view/asset/img/profile/<?php echo $data['foto_u']; ?>">
                                                </div>
                                                <div class="custom-file mt-4">
                                                    <input type="file" class="custom-file-input" id="img" name="img">
                                                    <label text class="custom-file-label" for="img">Choose file</label>
                                                    <p class="small text-danger">*Ekstensi jpg / png / jpeg</p>
                                                </div>
                                                <table align="center" class="mt-3">
                                                    <tr>
                                                        <td style="font-family: 'Jost', sans-serif;">
                                                            <strong
                                                                class="h3"><?= ucwords(strtolower($data['nama']))?></strong></br>
                                                            <p style="font-size:small;"><?= $data['nim']?></p>
                                                            <p></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-sm-11 bg-white p-3 ml-3 mt-3 rounded ">
                                                <a href="profile.php" class="btn text-black-50"><i
                                                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 bg-white p-3 ml-3 mr-3 rounded" align="left">
                            <div class="form-group">
                                <label for="nim">NIM / NIDN / NIK</label>
                                <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim']; ?>"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= $data['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="<?= $data['nama_jurusan']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?= $data['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No. Telp</label>
                                <input type="text" class="form-control" id="text" name="no_tlp"
                                    value="<?= $data['no_tlp']; ?>">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label></br>
                                <a href="#" class="btn form-control" id="up"
                                    data-target="#ModalEditPass<?php echo $data['id_peminjam']; ?>"
                                    data-toggle="modal">Ubah Password
                                </a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning form-control">Simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal fade" id="ModalEditPass<?php echo $data['id_peminjam']; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="label">
                                        Ubah
                                        Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" align="left">
                                    <form action="../f_aksi/edit_pass.php" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label style="color:black;">Username</label>
                                                <input type="text" name="username" class="form-control" id="username"
                                                    value="<?= $data['nim']?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label style="color:black;">Password Lama</label>
                                                <input type="password" name="password_lama" class="form-control"
                                                    id="password_lama" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label style="color:black;">Password Baru</label>
                                                <input type="password" name="password_baru" class="form-control"
                                                    id="password_baru" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label style="color:black;">Konfirmasi Password Baru</label>
                                                <input type="password" name="konf_password" class="form-control"
                                                    id="konf_password" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">SIMPAN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal Edit -->

                    <!-- End of Main Content -->
                </div>
                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span style="color: white;">Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" Jika Ingin Keluar dari Halaman Ini </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary bg-secondary" type="button"
                            data-dismiss="modal">Cancel</button>
                        <a class="btn btn-warning" href="../../admin/view/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

        <style rel="stylesheet">
            label {
                color: black;
            }

            #up:hover {
                background-color: #164a41;
                color: white;
            }

            #up {
                border-color: #164a41;
            }
        </style>
</body>

</html>