<?php
    require('../koneksi.php');
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM peminjam where code = '$code'";
        $query = mysqli_query($koneksi,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id_peminjam'];
            $sql =  "UPDATE peminjam set v_email=1 where id_peminjam=$id";
            $query = mysqli_query($koneksi,$sql);
            if($query){
                if($user['level']=="admin"){
                    echo "<script>alert('Verifikasi Berhasil ! Silahkan Buat Password Baru!.');window.location='../view/ganti_password.php?code=".$code."';</script>";
                }else{
                    header("location:../view/v_berhasil.php?code=".$code);
                }
            }else{
                echo "<script>alert('Verifikasi Gagal'.$query);window.location='../view/login.php';</script>";
            }
        }else {
            echo "<script>alert('CODE TIDAK DITEMUKAN ATAU TIDAK VALID');window.location='../view/login.php';</script>";
        }
    }else {
        echo "<script>alert('CODE TIDAK DITEMUKAN');window.location='../view/login.php';</script>";
    }

?>