<?php
include ('../akses.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else {
    die ("Error. No ID Selected!");    
}
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT a.* , b.* , c.* FROM ruangan a 
JOIN detail_ruangan b ON b.id_ruangan=a.id_ruangan 
JOIN fasilitas_ruangan c ON c.id_ruangan = a.id_ruangan 
WHERE a.id_ruangan = '$id'");
$query2= mysqli_query($koneksi, "SELECT a.nama_fasilitas , b.jumlah ,b.status_fr, c.id_ruangan FROM fasilitas_ruangan b 
JOIN fasilitas a ON a.id_fasilitas = b.id_fasilitas 
JOIN ruangan c ON c.id_ruangan = b.id_ruangan
WHERE c.id_ruangan = '$id' AND b.status_fr = 1");
$row = mysqli_fetch_array($query);

$html = '<center><h3>Detail Ruangan '.$row['no_ruangan'].'</h3></center><hr/><br/>';
$html .= '<center><img src ="../view/asset/img/'.$row["foto2"].'" width = "50%"></center>
<table style="margin-top:20px">
<tr scope="col">
<td>Nama Ruangan</td>
<td>:</td>
<td>'.$row['no_ruangan'].' - '.ucwords(strtolower($row['nama_ruangan'])).'</td>
</tr>
<tr scope="col">
<td>Lantai</td>
<td>:</td>
<td>'.$row['lantai'].'</td>
</tr>
<tr scope="col">
<td>Kapasitas</td>
<td>:</td>
<td>'.$row['kapasitas'].'</td>
</tr>
<tr scope="col">
<td>Fungsi</td>
<td>:</td>
<td>'.ucwords(strtolower($row['fungsi'])).'</td>
</tr>
<tr scope="col">
<td>Keperluan</td>
<td>:</td>
<td>'.ucwords(strtolower($row['keperluan'])).'</td>
</tr>
<tr scope="col">
<td>PIC 1</td>
<td>:</td>
<td>'.ucwords(strtolower($row['PIC'])).'</td>
</tr>
<tr scope="col">
<td>PIC 2</td>
<td>:</td>
<td>'.ucwords(strtolower($row['PIC2'])).'</td>
</tr>
<tr scope="col">
<td>Koor LAB</td>
<td>:</td>
<td>'.ucwords(strtolower($row['KoorLAB'])).'</td>
</tr>
</table>';
$html .= '<br><strong>Fasilitas Ruangan</strong><br>
<table style="margin-top:20px">';
while ($row2 = mysqli_fetch_array($query2)) {
    $html .= '
    <tr>
        <td>'.$row2['nama_fasilitas'].'</td>
        <td>:</td>
        <td>'.$row2['jumlah'].' Unit</td>
    </tr>';
}
$html .= '</table>';
$html .= '</html>';

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_ruangan.pdf', array("Attachment"=>0));
?>