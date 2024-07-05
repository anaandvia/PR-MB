<?php
session_start();

if(isset($_SESSION['level'])){
    header("Location: ../../index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="asset/img/Logo PR-MB-04.png">
    <title>PR-MB | Lupa Password</title>

    <!-- Custom fonts for this template-->
    <link href="asset/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="../../index.php">
            <img src="asset/img/Logo PR-MB-01.png" width="80px" alt="">
        </a>
        <a class="navbar-brand" href="../../index.php">
            <img src="asset/img/Logo-Polibatam.png" width="80px" alt="">
        </a>
    </nav>
    <!-- Akhir Nav -->
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5"
                    style="background: linear-gradient(90deg, #164A41 6.67%, #4D774E 56.77%, #9DC88D 106.67%);">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <h1 class="h2 text-light mb-4 mt-4 ml-4">Peminjaman Ruangan</h1>
                                <h1 class="h3 text-light mb-4 mt-4 ml-4">Lupa Password</h1>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                <?php 
                                    if(isset($_GET['gagal'])){
                                        echo "<div class='alert fade show alert-dark text-center' role='alert'>NIM/NIDN/NIK Tidak Ditemukan / Tidak Terdaftar
                                        <button class='close' type='button' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>×</span>
                                    </button></div>";
                                    }
                                ?>
                                    <div class="card bg-gradient-light">
                                        <div class="card-body">
                                            <form class="user" form method="POST" action="../f_cek/cek_username.php">
                                                <div class="form-group">
                                                    <input name="nim" class="form-control form-control-user"
                                                        placeholder="Masukan NIM / NIDN / NIK Anda" require>
                                                </div>
                                                <button type="submit" class="btn btn-user btn-block"
                                                    style="background-color: #164A41;color: white;">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Sudah Punya Akun?Login</a>
                                        <p class="small"> <a href="signup.php">Belum punya akun? Register</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <style>
        body {
            background: linear-gradient(90deg, #164A41 6.67%, #4D774E 56.77%, #9DC88D 106.67%);
        }

        .text-center a {
            color: white;
        }
        #mybutton {
            position: relative;
            z-index: 1;
            left: 90%;
            top: -37px;
                cursor: pointer;
            color: grey;
            }
        .form-control:focus , .form-group input:hover{
            border-color: #164a41;
            box-shadow: 0 0 0 0.2rem rgba(22, 74, 65, 0.25);
        }
        
    </style>
</body>

</html>