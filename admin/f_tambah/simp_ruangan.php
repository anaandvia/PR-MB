<?php
// include database connection file
include '../koneksi.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama_ruangan = $_POST['nama_ruangan'];
    $lantai = $_POST['lantai'];
    $kapasitas = $_POST['kapasitas'];
    $no_ruangan = $_POST['no_ruangan'];
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $foto = $_FILES['foto']['name'];
    $foto2 = $_FILES['foto2']['name'];
    //cek dulu jika merubah gambar produk jalankan coding ini
    if($foto != "") {
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoB = $random.'-'.$foto;
        $tmpName = $_FILES['foto']['tmp_name'];   
        if(in_array($ekstensifoto, $ekstensifotoV) === true)  {
            $FotoB = move_uploaded_file($tmpName, '../view/asset/img/'. $fotoB); //memindah file gambar ke folder gambar
                      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                } else {     
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/ruangan.php';</script>";
                }
        } else {
            echo "<script>alert('Pilih Gambar Terlebih dahulu.');window.location='../view/ruangan.php';</script>";
    }
    if($foto2 != "") {
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto2); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoA = $random.'-'.$foto2;
        $tmpName = $_FILES['foto2']['tmp_name'];   
        if(in_array($ekstensifoto, $ekstensifotoV) === true)  {
              $FotoD = move_uploaded_file($tmpName, '../view/asset/img/'. $fotoA); //memindah file gambar ke folder gambar
                      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                } else {     
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/ruangan.php';</script>";
                }
        } else {
            echo "<script>alert('Pilih Gambar Terlebih dahulu.');window.location='../view/ruangan.php';</script>";
    }
    if($FotoD && $FotoB){

    $query ="INSERT INTO ruangan VALUES ('','$no_ruangan','$nama_ruangan','$lantai','$kapasitas','$fotoB','$fotoA','$status')";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
        if(!$result){
            die ("Data Gagal Disimpan: ".mysqli_error($koneksi).
            " - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil disimpan.');window.location='../view/ruangan.php';</script>";
        }
    }else{
        echo "<script>alert('Data gagal disimpan.');window.location='../view/ruangan.php';</script>";
    }
}
?>
