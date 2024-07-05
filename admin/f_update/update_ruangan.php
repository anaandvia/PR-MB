<?php
// include database connection file
include '../koneksi.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id_ruangan = $_POST['id_ruangan'];
    $no_ruangan = $_POST['no_ruangan'];
    $nama_ruangan = $_POST['nama_ruangan'];
    $lantai = $_POST['lantai'];
    $kapasitas = $_POST['kapasitas'];
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $foto = $_FILES['foto']['name'];
    $foto2 = $_FILES['foto2']['name'];
    $fotolama =isset($_POST['fotolama']) ? $_POST['fotolama'] : '';
    $fotolama2 =isset($_POST['fotolama2']) ? $_POST['fotolama2'] : '';
    //cek dulu jika merubah gambar produk jalankan coding ini
    if($foto != "" && $foto2 != ""){
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoB = $random.'-'.$foto;
        $tmpName = $_FILES['foto']['tmp_name'];
        $y = explode('.', $foto2); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto2 = strtolower(end($y));
        $random = rand(1,999);
        $fotoA = $random.'-'.$foto2;
        $tmpName2 = $_FILES['foto2']['tmp_name'];  
			if(in_array($ekstensifoto, $ekstensifotoV) == true && in_array($ekstensifoto2, $ekstensifotoV) === true ){
				$FotoB = move_uploaded_file($tmpName, '../view/asset/img/'. $fotoB);
				$FotoD = move_uploaded_file($tmpName2, '../view/asset/img/'. $fotoA);
				
				$query ="UPDATE ruangan SET no_ruangan ='$no_ruangan',nama_ruangan='$nama_ruangan',lantai='$lantai', kapasitas='$kapasitas' ,foto='$fotoB' ,foto2='$fotoA', status='$status' WHERE id_ruangan ='$id_ruangan'";
				$result = mysqli_query($koneksi, $query);
				// periska query apakah ada error
				if(!$result){
					die ("Query gagal dijalankan: ".mysqli_error($koneksi).
						" - ".mysqli_error($koneksi));
				} else {
					if (file_exists('../view/asset/img/'. $fotolama)) {
						unlink('../view/asset/img/'. $fotolama);
					}
					if (file_exists('../view/asset/img/'. $fotolama2)) {
						unlink('../view/asset/img/'. $fotolama2);
					}
					echo "<script>alert('Data berhasil diubah.');window.location='../view/ruangan.php';</script>";
				}
			}
			else {
				//jika file ekstensi tidak jpg dan png maka alert ini yang tampil
				echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/ruangan.php';</script>";
			}
    }else if($foto != ""){
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoB = $random.'-'.$foto;
        $tmpName = $_FILES['foto']['tmp_name'];
		$foto2 = $fotolama2;
		if(in_array($ekstensifoto, $ekstensifotoV) == true){
            $FotoB = move_uploaded_file($tmpName, '../view/asset/img/'. $fotoB);
            
            $query ="UPDATE ruangan SET no_ruangan ='$no_ruangan',nama_ruangan='$nama_ruangan',lantai='$lantai', kapasitas='$kapasitas' ,foto='$fotoB' ,foto2='$foto2', status='$status' WHERE id_ruangan ='$id_ruangan'";
            $result = mysqli_query($koneksi, $query);
            // periska query apakah ada error
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_error($koneksi).
                    " - ".mysqli_error($koneksi));
            } else {
                if (file_exists('../view/asset/img/'. $fotolama)) {
                    unlink('../view/asset/img/'. $fotolama);
                }
                echo "<script>alert('Data berhasil diubah.');window.location='../view/ruangan.php';</script>";
            }
        }
        else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/ruangan.php';</script>";
        }
		
    }else if($foto2 != ""){
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto2); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoA = $random.'-'.$foto2;
        $tmpName = $_FILES['foto2']['tmp_name'];
		$foto = $fotolama;
		if(in_array($ekstensifoto, $ekstensifotoV) == true){
            $FotoB = move_uploaded_file($tmpName, '../view/asset/img/'. $fotoA);
            
            $query ="UPDATE ruangan SET no_ruangan ='$no_ruangan',nama_ruangan='$nama_ruangan',lantai='$lantai', kapasitas='$kapasitas' ,foto='$foto' ,foto2='$fotoA', status='$status' WHERE id_ruangan ='$id_ruangan'";
            $result = mysqli_query($koneksi, $query);
            // periska query apakah ada error
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_error($koneksi).
                    " - ".mysqli_error($koneksi));
            } else {
                if (file_exists('../view/asset/img/'. $fotolama2)) {
                    unlink('../view/asset/img/'. $fotolama2);
                }
                echo "<script>alert('Data berhasil diubah.');window.location='../view/ruangan.php';</script>";
            }
        }
        else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/ruangan.php';</script>";
        }
    }else{
        $foto = $fotolama;
		$foto2 = $fotolama2;
		$query ="UPDATE ruangan SET no_ruangan ='$no_ruangan',nama_ruangan='$nama_ruangan',lantai='$lantai', kapasitas='$kapasitas' ,foto='$foto' ,foto2='$foto2', status='$status' WHERE id_ruangan ='$id_ruangan'";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../view/ruangan.php';</script>";
        }
		
    }
}
?>
