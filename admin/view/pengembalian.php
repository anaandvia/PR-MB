<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="asset/img/Logo PR-MB-04.png">
    <title>Admin PR-MB | Data Pengembalian</title>

    <!-- Custom fonts for this template-->
    <link href="asset/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this page -->
    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/css/sb-admin-2.css" rel="stylesheet">
    <link href="asset/css/data.css" rel="stylesheet">
    <!-- Datatables -->
    <script type="text/javascript" src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="asset/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/DataTables-1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/Buttons-1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/Buttons-1.7.1/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/Buttons-1.7.1/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/Buttons-1.7.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="asset/DataTables/Buttons-1.7.1/js/buttons.print.min.js"></script>
    <!-- css datable -->
    <link rel="stylesheet" type="text/css"
        href="asset/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/DataTables/Buttons-1.7.1/css/buttons.bootstrap4.min.css" />
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
                    <img src="asset/img/Logo PR-MB-02.png" style="width :80px;"></img>
                </div>
                <div class="sidebar-brand-text mx-3">PR-MB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
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
                <a class="nav-link collapsed" href="user.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data User</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="ruangan.php">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Data Ruangan</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="admin.php">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Data Admin</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="pengembalian.php">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Data Pengembalian</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="peminjaman.php">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>Data Peminjaman</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="peraturan.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Peraturan</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../../user/view/dashboard.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Web User</span>
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
                                            <button class="btn btn-warning" type="button">
                                                <i class="fas fa-search fa-sm"></i>
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
                                include "../koneksi.php";
                                $sql5     ="SELECT a.* , b.* , c.no_ruangan , d.nim , d.nama FROM peminjaman a 
                                JOIN pengembalian b ON b.id_peminjaman=a.id_peminjaman
                                JOIN ruangan c ON c.id_ruangan = a.id_ruangan
                                JOIN peminjam d ON d.id_peminjam=a.id_peminjam
                                where a.status = 0 or b.status_kembali = 2";
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
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <?php 
                                if ($data5['status_kembali']==0 ){
                                    echo 
                                        "<div class='mr-3'>
                                            <div class='icon-circle bg-danger'>
                                                <i class='fas fa-arrow-down text-white'></i>
                                            </div>
                                        </div>";
                                }else if ($data5['status_kembali']==2){
                                    echo "<div class='mr-3'>
                                            <div class='icon-circle bg-success'>
                                                <i class='fas fa-arrow-down text-white'></i>
                                            </div>
                                        </div>";
                                }
                                ?>
                                    <div>
                                        <div class="small text-gray-500">
                                            <?php $tgl=date('l, d-m-Y');
                                        echo $tgl;
                                        ?>
                                        </div>
                                        <span class="">
                                            <?php 
                                            if ($data5['status_kembali']==0 ){
                                                echo "Requesh Peminjaman Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "&nbsp; oleh &nbsp;";
                                                echo $data5['nim'];
                                            }else if ($data5['status_kembali']==2){
                                                echo "Pengembalian Ruangan <br>";
                                                echo $data5['no_ruangan'];
                                                echo "&nbsp; oleh &nbsp;";
                                                echo $data5['nim'];
                                            }
                                        
                                        ?>
                                        </span>
                                    </div>
                                    <?php } ?>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                        Alerts</a>
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
                                    src="asset/img/profile/<?php echo $data['foto_u']; ?>">
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
                    <h1 class="text-white">Data Pengembalian</h1>
                    <!-<!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form class="form-inline my-2 my-lg-0 ml-auto">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <a href="../f_pdf/domkembali.php" class="btn btn-warning mb-2 btndata">
                                                <i class="fas fa-print mr-2"></i>CETAK DATA PENGEMBALIAN</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dataTable" width="100%"
                                        cellspacing="0" style="background-color: white; color:black">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>NO</th>
                                                <th>ID Peminjaman</th>
                                                <th>NIM/NIDN/NIK</th>
                                                <th>Tgl Pinjam</th>
                                                <th>Tgl Pengembalian</th>
                                                <th>Foto Bukti</th>
                                                <th>Umpan Balik</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        include '../koneksi.php';
                                            $sql2 = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman,peminjam.nim,peminjaman.tgl_acara , peminjaman.tgl_akhir_acara , peminjaman.status ,pengembalian.* 
                                            FROM pengembalian 
                                            JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman 
                                            JOIN peminjam ON peminjaman.id_peminjam = peminjam.id_peminjam
                                            ORDER BY pengembalian.tgl_pengembalian DESC
                                            ");
                                        $no = 1;
                                        while ($data2 = mysqli_fetch_array($sql2)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><a
                                                        href="detail_peminjaman.php?id2=<?=$data2['id_peminjaman']?>"><?=$data2["id_peminjaman"]?></a>
                                                </td>
                                                <td><?php echo $data2['nim']; ?></td>
                                                <td><?php echo $data2['tgl_acara']; ?><?= '-' ?><?php echo $data2['tgl_akhir_acara']; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($data2['tgl_pengembalian'] == '0000-00-00 00:00:00') {
                                                            echo "";
                                                        }else {
                                                        echo $data2['tgl_pengembalian'];
                                                        }
                                                        ?></td>
                                                <td>
                                                <?php 
                                                        if($data2['status_kembali']==1 || $data2['status_kembali']==2){
                                                            echo '<a href="#" data-target="#LihatFoto_b'.$data2['id'].'"
                                                    data-toggle="modal"><img src ="asset/img/bukti/'.$data2["foto_b"].'" width = "100" height = "100"></a>';
                                                        }else if ($data2['status_kembali']==0){
                                                            if($data2['foto_b']!= ""){
                                                                echo '<a href="#" data-target="#LihatFoto_b'.$data2['id'].'"
                                                    data-toggle="modal"><img src ="asset/img/bukti/'.$data2["foto_b"].'" width = "100" height = "100"></a>';
                                                            }
                                                            echo "";
                                                        }
                                                        ?>
                                                </td>
                                                <!-- Modal Lihat -->
                                                <div class="modal fade" id="LihatFoto_b<?php echo $data2['id']; ?>"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="label">Lihat Foto
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="asset/img/bukti/<?=$data2['foto_b']?>" alt=""
                                                                    width="100%">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- /ModalLihat -->
                                                    <td><?php echo $data2['kendala']; ?></td>
                                                    <td><?php 
                                                        if ($data2['status_kembali']==1) {
                                                            echo "<p style='color:green;'>Done</p>";
                                                        }else if ($data2['status_kembali']==0) {
                                                            echo "<p style='color:red;'>No</p>";
                                                        }else if ($data2['status_kembali']==2) {
                                                            echo "<p style='color:red;'>Menunggu Konfirmasi</p>";
                                                        }
                                                    ?></td>
                                                    <td>
                                                        <a href="#"
                                                            data-target="#EditKembali<?php echo $data2['id']; ?>"
                                                            data-toggle="modal">
                                                            <i
                                                                class="fas fa-edit bg-success p-2 text-white rounded"></i></a>
                                                        <a href="#"
                                                            data-target="#HapusKembali<?php echo $data2['id']; ?>"
                                                            data-toggle="modal">
                                                            <i
                                                                class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></a>
                                                    </td>
                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="HapusKembali<?php echo $data2['id']; ?>"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="label">Hapus Data
                                                                        Pengembalian
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="../f_hapus/delete_pengembalian.php"
                                                                        method="post">
                                                                        Apakah anda yakin ingin menghapus data
                                                                        pengembalian
                                                                        dari <b id="datadel"><?=$data2['nim']?></b>?
                                                                        <div class="modal-footer">
                                                                            <input type="hidden" name="id_peminjaman"
                                                                                id="id_peminjaman"
                                                                                value="<?=$data2['id_peminjaman']?>">
                                                                            <input type="hidden" name="id" id="id"
                                                                                value="<?=$data2['id']?>">
                                                                            <button type="submit"
                                                                                class="btn btn-warning">DELETE</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /ModalDelete -->
                                            </tr>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="EditKembali<?php echo $data2['id']; ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="label">
                                                                Ubah
                                                                Status
                                                                Pengembalian</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" align="left">
                                                            <form action="../f_update/update_pengembalian.php" method="post">
                                                                <input type="hidden" name="id" id="id"
                                                                    value="<?=$data2['id']?>">
                                                                <input type="hidden" name="id_peminjaman"
                                                                    id="id_peminjaman"
                                                                    value="<?=$data2['id_peminjaman']?>">
                                                                <input type="hidden" name="nim"
                                                                    id="nim"
                                                                    value="<?=$data2['nim']?>">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Tanggal Pengembalian</label>
                                                                        <input type="text" name="tgl_pengembalian"
                                                                            class="form-control" id="tgl_pengembalian"
                                                                            value="<?=$data2['tgl_pengembalian']?>"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Foto Bukti</label><br>
                                                                        <?php echo "<img src ='asset/img/bukti/".$data2['foto_b']."' width = '100' height = '100'>" ;?>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="kendala">Umpan Balik</label>
                                                                        <textarea class="form-control" id="kendala"
                                                                            name="kendala" rows="3"
                                                                            readonly><?=$data2['kendala']?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="status_kembali">status</label>
                                                                            <select class="form-control" id="status_kembali" name="status_kembali"
                                                                                value="<?=$data["status_kembali"]?>" required>
                                                                        <?php if ($data['status_kembali'] == 1){
                                                                            echo "<option value='1' selected>Done</option>
                                                                            <option value='0'>No</option>";
                                                                        }else if($data['status_kembali'] == 0){
                                                                            echo "<option value='1' >Done</option>
                                                                            <option value='0' selected>No</option>";
                                                                        }
                                                                        ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="alasan">Alasan Menolak</label>
                                                                        <?php if($data2['status_kembali'] == 0){
                                                                            if($data2['alasan'] != ""){
                                                                            echo '<textarea class="form-control" id="alasan"
                                                                            name="alasan" rows="3" readonly >'.$data2['alasan'].'</textarea>';
                                                                            }else{
                                                                                echo '<textarea class="form-control" id="alasan"
                                                                            name="alasan" rows="3" ></textarea>';
                                                                            }
                                                                        }else {
                                                                            echo '<textarea class="form-control" id="alasan"
                                                                            name="alasan" rows="3" ></textarea>';
                                                                        }
                                                                        
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-warning">SIMPAN</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Modal Edit -->
                                            <?php
                                    }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <script type="text/javascript" class="init">
                                $('#dataTable').DataTable({
                                    "paging": true,
                                    "ordering": true,
                                    "info": true,
                                    dom: 'Bfrtip',
                                    buttons: [{
                                            extend: 'excelHtml5',
                                            className: 'btn-success bg-success',
                                            title: 'Data Pengembalian',
                                            exportOptions: {
                                                columns: [0, 1, 2, 3, 4, 6, 7]
                                            }
                                        },
                                        {
                                            extend: 'pdfHtml5',
                                            className: 'btn-danger bg-danger',
                                            title: 'Data Pengembalian',
                                            download: 'open',
                                            exportOptions: {
                                                columns: [0, 1, 2, 3, 4, 5, 6, 7]
                                            }
                                        },
                                    ]
                                });
                            </script>
                        </div>
                        <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <table class="table table-striped table-bordered textactive">
            </div>

            <!-- /Modah Tambah -->
            <!-- Akhir Data -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


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
                    <h5 class="modal-title text-black-50" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" Jika Ingin Keluar dari Halaman Ini </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary bg-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-warning" href="logout.php">Logout</a>
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
</body>

</html>