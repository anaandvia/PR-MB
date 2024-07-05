<?php
include '../akses.php';
include('../koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT peminjam.nim, peminjam.nama, peminjam.no_tlp, ruangan.no_ruangan ,ruangan.id_ruangan, peminjaman.nama_kegiatan , peminjaman.tgl_acara , peminjaman.tgl_akhir_acara , detail_acara.PJ , detail_acara.PA , detail_acara.PK , detail_acara.n_tamu , detail_acara.sifat_acara , detail_acara.jenis_acara , detail_acara.keterangan , peminjaman.status , peminjaman.id_peminjaman
FROM peminjaman 
JOIN peminjam ON peminjaman.id_peminjam = peminjam.id_peminjam
JOIN ruangan ON peminjaman.id_ruangan = ruangan.id_ruangan
JOIN detail_acara ON peminjaman.id_peminjaman = detail_acara.id_peminjaman
");
$html = '<center><h3>Data Peminjaman Ruangan</h3></center><hr/><br/>';
$html .= '<table border="0.5" width="100%" cellspacing="0" cellpadding="3">
    <tr align="center">
    <th scope="col">NO</th>
    <th scope="col">NIM/NIDN/NIK</th>
    <th scope="col">Nama</th>
    <th scope="col">No. Tlp</th>
    <th scope="col">No Ruangan</th>
    <th scope="col">Nama Kegiatan</th>
    <th scope="col">Tgl Acara</th>
    <th scope="col">Tgl Selesai Acara</th>
    <th scope="col">Penanggung Jawab</th>
    <th scope="col">Pendamping Acara</th>
    <th scope="col">Pengarah Kegiatan</th>
    <th scope="col">Jumlah Tamu</th>
    <th scope="col">status</th>
    </tr>';
    $no = 1;
while($data = mysqli_fetch_array($query))
{
    $html .= "<tr align='center'>
    <td>$no</td>
    <td>".$data['nim']."</td>
    <td>".ucwords(strtolower($data['nama']))."</td>
    <td>".$data['no_tlp']."</td>
    <td>".$data['no_ruangan']."</td>
    <td>".$data['nama_kegiatan']."</td>
    <td>".$data['tgl_acara']."</td>
    <td>".$data['tgl_akhir_acara']."</td>
    <td>".ucwords(strtolower($data['PJ']))."</td>
    <td>".ucwords(strtolower($data['PA']))."</td>
    <td>".ucwords(strtolower($data['PK']))."</td>
    <td>".$data['n_tamu']."</td>
    <td>";
    if ($data['status']==3) {
        $html .= "<p style='color:green;'>Disetujui</p>";
    } elseif ($data['status']==2) {
        $html .= "<p style='color:red;'>Ditolak</p>";
    } elseif ($data['status']==1) {
        $html .= "<p style='color:blue;'>Ditolak</p>";
    } else {
        $html .= "<p style='color:grey;'>Diajukan</p>";
    }
    $html .= "</td>
    </tr>";
    $no++;
}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('LEGAL', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
ob_end_clean();
$dompdf->stream('laporan_peminjaman.pdf', array("Attachment"=>0));

?>