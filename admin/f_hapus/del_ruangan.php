<?php 

include '../koneksi.php';

	$id_ruangan = $_POST['datadel'];
        $query = "SELECT*FROM ruangan WHERE id_ruangan ='$id_ruangan'";
                $sql = mysqli_query($koneksi,$query );
        $data = mysqli_fetch_array($sql);
        if (file_exists('../view/asset/img/'. $data['foto']))
                unlink('../view/asset/img/'. $data['foto']);
        if (file_exists('../view/asset/img/'. $data['foto2']))
                unlink('../view/asset/img/'. $data['foto2']);

// Query hapus data
        $query2 = "DELETE FROM ruangan WHERE id_ruangan ='$id_ruangan'";
        $sql2 = mysqli_query($koneksi,$query2 );
        if ($sql2) {
		echo "
                <script>
                alert('data berhasil di hapus!');
                document.location.href = '../view/ruangan.php';
                </script>
                ";
	}else {
		echo "
                <script>
                alert('data gagal di hapus!');
                document.location.href = '../view/ruangan.php';
                </script>
                ";
	}
?>