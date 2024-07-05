<?php
include '../akses.php';
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT*FROM peminjam WHERE level = 'peminjam'");
$html = '<center><h3>Data Peminjam Ruangan</h3></center><hr/><br/>';
$html .= '<table border="0.5" width="100%" cellspacing="0" cellpadding="3">
    <tr align="center">
    <th scope="col">NO</th>
    <th scope="col">NIM/NIDN/NIK</th>
    <th scope="col">NAMA</th>
    <th scope="col">EMAIL</th>
    <th scope="col">No. Telepon</th>
    <th scope="col">Foto</th>
    </tr>';
    $no = 1;
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr align='center'>
    <td>$no</td>
    <td>".ucwords($row['nim'])."</td>
    <td>".ucwords(strtolower($row['nama']))."</td>
    <td>".$row['email']."</td>
    <td>".$row['no_tlp']."</td>
    <td><img src ='../view/asset/img/profile/".$row['foto_u']."' width = '100' height = '100'></td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_user.pdf', array("Attachment"=>0));
?>