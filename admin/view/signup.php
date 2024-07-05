<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="asset/img/Logo PR-MB-04.png">
    <title>PR-MB | Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="asset/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/regis.css">
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <h1 class="h3 mb-0 text-dark">Registrasi Peminjaman Ruangan <br>Politeknik Negeri Batam</h1>
                    <hr color="linear-gradient(-90deg, #164A41 6.67%, #4D774E 56.77%, #9DC88D 106.67%);">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="../f_cek/daftar.php" id="regis" method="post">
                                <div class="form-group">
                                    <label class="details">NIM/NIDN/NIK</label>
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        placeholder="Masukkan NIM Anda" required>
                                </div>
                                <div class="form-group">
                                    <label class="details">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Anda" required>
                                </div>
                                <div class="form-group">
                                    <label class="details">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Masukkan Email Anda" required>
                                </div>
                                <div class="form-group">
                                    <label class="details">No. Telp</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_tlp"
                                        placeholder="Masukkan No.Telp Anda" required>
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="details">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda" required>
                            </div>
                            <div class="form-group">
                                <label class="details">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="konfpassword" name="konfpassword" placeholder="Ketik Ulang Password Anda"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="details" for="id_ruangan">JURUSAN</label>
                                <select class="form-control" id="id_jurusan" name="id_jurusan" required>
                                    <?php
                                    include "../koneksi.php";
                                    $sql2 = mysqli_query($koneksi, "SELECT * FROM jurusan");
                                    while($row=mysqli_fetch_array($sql2)){
                                        echo "<option value='$row[id_jurusan]'>$row[nama_jurusan]</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="details">Role</label>
                                <select class="form-control" aria-label=".form-select-sm example" id="role" name="role" required>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <button class="form-control text-white" name="submit" id="submit" type="submit">Register</button>
                        </form>
                    </div>
                    <div class="text-center">
                        <a class="small text-success" href="login.php">Sudah punya akun? Login</a>
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
    <script type="text/javascript">
        $(function () {
            $("#submit").click(function () {
                var password = $("#password").val();
                var confirmPassword = $("#konfpassword").val();
                if (password != confirmPassword) {
                    alert("Password Tidak Sama");
                    return false;
                }
                return true;
            });
        });
    </script>
</body>

</html>