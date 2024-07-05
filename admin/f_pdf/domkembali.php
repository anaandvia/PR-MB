<?php
include '../akses.php';
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman,peminjam.nim,peminjaman.tgl_acara , peminjaman.tgl_akhir_acara , peminjaman.status ,pengembalian.* 
FROM pengembalian 
JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman 
JOIN peminjam ON peminjaman.id_peminjam = peminjam.id_peminjam
ORDER BY pengembalian.tgl_pengembalian DESC
");
$html = '<center><h3>Data Pengembalian Ruangan</h3></center><hr/><br/>';
$html .= '<table border="0.5" width="100%" cellspacing="0" cellpadding="3">
    <tr align="center">
    <th scope="col">NO</th>
    <th scope="col">ID Peminjaman</th>
    <th scope="col">NIM/NIDN/NIK</th>
    <th scope="col">Tgl Peminjaman</th>
    <th scope="col">Tgl Pengembalian</th>
    <th scope="col">Foto Bukti</th>
    <th scope="col">kendala</th>
    </tr>';
    $no = 1;
while($data2 = mysqli_fetch_array($query))
{
    $html .= "<tr align='center'>
    <td>$no</td>
    <td>".$data2['id_peminjaman']."</td>
    <td>".$data2['nim']."</td>
    <td>".$data2['tgl_acara']." -<br>".$data2['tgl_akhir_acara']."</td>
    <td>".$data2['tgl_pengembalian']."</td>
    <td><img src ='../view/asset/img/bukti/".$data2['foto_b']."' width = '100' height = '100'></td>
    <td>".$data2['kendala']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_pengembalian.pdf', array("Attachment"=>0));
?>