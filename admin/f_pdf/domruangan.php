<?php
include '../akses.php';
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT*FROM ruangan");
$html = '<center><h3>Data Ruangan</h3></center><hr/><br/>';
$html .= '<table border="0.5" width="100%" cellspacing="0" cellpadding="3">
    <tr align="center">
    <th>NO</th>
    <th>No Ruangan</th>
    <th>Nama Ruangan</th>
    <th>Lantai</th>
    <th>Kapasitas</th>
    <th>Foto Depan</th>
    <th>Status</th>
    </tr>';
    $no = 1;
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr align='center'>
    <td>$no</td>
    <td>".$row['no_ruangan']."</td>
    <td>".ucwords(strtolower($row['nama_ruangan']))."</td>
    <td>".$row['lantai']."</td>
    <td>".$row['kapasitas']." orang</td>
    <td><img src ='../view/asset/img/".$row['foto2']."' width = '100' height = '100'></td>
    <td>";
    if ($row['status']==1) {
        $html .= "<p style='color:green;'>Available</p>";
    } else{
        $html .= "<p style='color:red;'>Not Available</p>";
    }
    $html .= "</td>
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
$dompdf->stream('laporan_ruangan.pdf', array("Attachment"=>0));
?>