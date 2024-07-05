<?php
// include database connection file
include '../../admin/koneksi.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $no_tlp = htmlspecialchars($_POST['no_tlp']);
    $foto = $_FILES['img']['name'];
    $fotolama =isset($_POST['fotolama']) ? $_POST['fotolama'] : '';
    //cek dulu jika merubah gambar produk jalankan coding ini
    if($foto != ""){
        $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensifoto = strtolower(end($x));
        $random = rand(1,999);
        $fotoB = $random.'-'.$foto;
        $tmpName = $_FILES['img']['tmp_name']; 
			if(in_array($ekstensifoto, $ekstensifotoV) == true){
				$FotoB = move_uploaded_file($tmpName, '../../admin/view/asset/img/profile/'.$fotoB);
				$query ="UPDATE peminjam SET nama='$nama',email='$email', no_tlp='$no_tlp',foto_u='$fotoB' WHERE nim='$nim'";
				$result = mysqli_query($koneksi, $query);
				// periska query apakah ada error
				if(!$result){
					die ("Query gagal dijalankan: ".mysqli_error($koneksi).
						" - ".mysqli_error($koneksi));
				} else {
					//tampil alert dan akan redirect ke halaman index.php
					//silahkan ganti index.php sesuai halaman yang akan dituju
					if (file_exists('../../admin/view/asset/img/profile/'.$fotolama)) {
						unlink('../../admin/view/asset/img/profile/'.$fotolama);
					}
					echo "<script>alert('Data berhasil diubah.');window.location='../view/profile.php';</script>";
				}
			}
			else {
				//jika file ekstensi tidak jpg dan png maka alert ini yang tampil
				echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/e_profile.php';</script>";
			}
    }else{
        $foto_u = $fotolama;
		$query ="UPDATE peminjam SET nama='$nama',email='$email', no_tlp='$no_tlp',foto_u='$foto_u' WHERE nim='$nim'";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='../view/profile.php';</script>";
        }
		
    }
}
?>