<?php
include('../koneksi.php');
include '../akses.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else {
    die ("Error. No ID Selected!");    
}
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();



$query = mysqli_query($koneksi,"SELECT peminjam.nim, peminjam.nama, peminjam.no_tlp, ruangan.nama_ruangan, ruangan.no_ruangan , peminjaman.nama_kegiatan , peminjaman.tgl_acara , peminjaman.tgl_akhir_acara , detail_acara.PJ , detail_acara.PA , detail_acara.PK , detail_acara.n_tamu , detail_acara.sifat_acara , detail_acara.jenis_acara , detail_acara.keterangan , peminjaman.status , peminjaman.id_peminjaman
FROM peminjaman 
JOIN peminjam ON peminjaman.id_peminjam = peminjam.id_peminjam
JOIN ruangan ON peminjaman.id_ruangan = ruangan.id_ruangan
JOIN detail_acara ON peminjaman.id_peminjaman = detail_acara.id_peminjaman
WHERE peminjaman.id_peminjaman='$id'");
$data1 = mysqli_fetch_array($query);
$tanggal = $data1["tgl_acara"];
$day = date('D', strtotime($tanggal));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);
$html = '<table border="1" width="100%" cellspacing="0" cellpadding="2" style="font-size:12px;">
    <tr align="center" style="font-weight:bold;">
    <td colspan="2" width="120px" heigh="100px"><img src="../view/asset/img/logo.png" width="70px"></td>
    <td scope="col">BO.27.2.1-V4</td>
    <td scope="col" width="120px" heigh="100px">HAL.1/1</td>
    </tr>
    <tr align="center" style="font-weight:bold;">
    <td>BAUK</td>
    <td>DIR</td>
    <td rowspan="2" colspan="2">BORANG BAUK :<br> PERMINTAAN PENYELENGGARAAN KEGIATAN</td>
    </tr>
    <tr align="center" style="font-weight:bold;">
    <td colspan="2">30 Agustus 2017</td>
    </tr> </table>
    ';
$html.= '<div class="row" style="padding-top:10px">
            <table border="0" width="100%" cellspacing="0" style="font-size:10px;">
                <tr>
                    <td style="background-color:black;color:white;"><strong>Identitas Acara</strong></td>
                </tr>
            </table>
        </div>';
$html .= '<div class="row" style="padding-top:8px">
            <table border="1" width="100%" cellspacing="0" cellpadding="3" style="font-size:10px;">
                <tr>
                    <td width="150px">Nama Kegiatan</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.$data1["nama_kegiatan"].'</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Hari/Tanggal/Bln/Thn</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">
                    '.$dayList[$day].''.date(' /d/m/Y', strtotime($tanggal)).'</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Jam</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.date('H:i', strtotime($tanggal)).' WIB</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Penanggung Jawab</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.ucwords(strtolower($data1["PJ"])).'</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Pendamping Acara/Peserta</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.ucwords(strtolower($data1["PA"])).'</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Pengarah Kegiatan /Pembawa Acara (MC)</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.ucwords(strtolower($data1["PK"])).'</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Jumlah Tamu/Peserta</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.$data1["n_tamu"].' Orang</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Sifat</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">';
                    if ($data1["sifat_acara"] == "Acara Mahasiswa"){
                        $html .= 
                        '<input type="checkbox" checked>Acara Mahasiswa
                        <input type="checkbox" >Acara Polibatam'
                        ;
                    }else {
                        $html .= 
                        '<input type="checkbox" >Acara Mahasiswa
                        <input type="checkbox" checked>Acara Polibatam'
                        ;
                    }
            $html .= '</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="150px">Tempat Kegiatan</td>
                    <td width="20px" align="center">:</td>
                    <td colspan="2">'.$data1["no_ruangan"].' - '.$data1["nama_ruangan"].'</td>
                    <td></td>
                </tr>
                <tr style="font-size:10px;">
                    <td width="150px" rowspan="6">Susunan Acara (standart) <br> - Pembukaan<br>- Laporan <br>- Sambutan<br> - sambutan<br>- Penyerahan cindera mata<br>- Doa<br> - Penutup</td>
                    <td width="20px" align="center" rowspan="6">:</td>
                    <td align="center" ><strong>Acara</strong></td>
                    <td align="center"><strong>Keterangan</strong></td>
                    <td rowspan="6"></td>
                </tr>';
                if ($data1["jenis_acara"] == "Presentasi Profil"){
                    $html .= 
                    '<tr style="font-size:10px;">
                    <td><input type="checkbox" checked>Presentasi Profil</td>
                    <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Diskusi </td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Kunjungan/Silaturahmi</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Promosi*</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Lain-lain</td>
                        <td></td>
                    </tr>';
                }else if ($data1["jenis_acara"] == "Diskusi") {
                    $html .= 
                    '<tr style="font-size:10px;">
                    <td><input type="checkbox">Presentasi Profil</td>
                    <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox" checked>Diskusi </td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Kunjungan/Silaturahmi</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Promosi*</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Lain-lain</td>
                        <td></td>
                    </tr>';
                }else if ($data1["jenis_acara"] == "Kunjungan") {
                    $html .= 
                    '<tr style="font-size:10px;">
                    <td><input type="checkbox">Presentasi Profil</td>
                    <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Diskusi </td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox" checked>Kunjungan/Silaturahmi</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Promosi*</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Lain-lain</td>
                        <td></td>
                    </tr>';
                }else if ($data1["jenis_acara"] == "Promosi") {
                    $html .= 
                    '<tr style="font-size:10px;">
                    <td><input type="checkbox">Presentasi Profil</td>
                    <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Diskusi </td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Kunjungan/Silaturahmi</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox" checked>Promosi*</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Lain-lain</td>
                        <td></td>
                    </tr>';
                }else if ($data1["jenis_acara"] == "Lain-lain") {
                    $html .= 
                    '<tr style="font-size:10px;">
                    <td><input type="checkbox">Presentasi Profil</td>
                    <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Diskusi </td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Kunjungan/Silaturahmi</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox">Promosi*</td>
                        <td></td>
                    </tr>
                    <tr style="font-size:10px;">
                        <td><input type="checkbox" checked>Lain-lain</td>
                        <td></td>
                    </tr>';
                }
                $html .= '
            </table>
        </div>';
$html.= '<div class="row" style="padding-top:10px">
        <table border="0" width="100%" cellspacing="0">
            <tr style="font-size:10px;">
                <td style="background-color:black;color:white;"><strong>Persiapan</strong></td>
            </tr>
        </table>
        </div>';
$html .= '<div class="row" style="padding-top:8px">
        <table border="1" width="100%" cellspacing="0" cellpadding="3" >
            <tr style="font-size:10px;">
            <td rowspan="5" width="150px">Penugasan</td>
            <td rowspan="5" width="20px" align="center">:</td>
            <td><strong>Kegiatan</strong></td>
            <td><strong>PIC/Keterangan</strong></td>
            <td rowspan="5"></td>
            </tr>
            <tr style="font-size:10px;">
            <td><input type="checkbox">Persiapan Ruangan</td>
            <td>BAUK</td>
            </tr>
            <tr style="font-size:10px;">
            <td><input type="checkbox">Persiapan dokumentasi</td>
            <td>BAUK</td>
            </tr>
            <tr style="font-size:10px;">
            <td><input type="checkbox">Kunjungan di area  Politeknik</td>
            <td>BAUK</td>
            </tr>
            <tr style="font-size:10px;">
            <td><input type="checkbox">Transportasi (Lain – lain)</td>
            <td>BAUK</td>
            </tr>
            <tr style="font-size:10px;">
            <td width="150px">Konsumsi</td>
            <td align="center" width="20px">:</td>
            <td colspan="2">
            <input type="checkbox" >Snack Box + coffe & tea +Aqua<br>
            <input type="checkbox" >Buffet snack + coffee & tea+Aqua<br>
            <input type="checkbox" >Makan Siang/Malam (box/buffet + coffe & tea+Aqua)
            </td>
            <td></td>
            </tr>
            <tr style="font-size:10px;">
            <td rowspan="2" width="150px">Cinderamata</td>
            <td rowspan="2" width="20px" align="center">:</td>
            <td><input type="checkbox"></td>
            <td>Jumlah :</td>
            <td rowspan="2"></td>
            </tr>
            <tr style="font-size:10px;">
            <td><input type="checkbox"></td>
            <td>Jumlah :</td>
            </tr>
            <tr align="center" style="font-size:10px;">
            <td colspan="3">Mengetahui</td>
            <td colspan="2">Tembusan</td>
            </tr>
            <tr style="font-size:10px;">
            <td colspan="2" align="center" >Penanggung Jawab <br><br><br><br>'.ucwords(strtolower($data1["PJ"])).'<hr width="100px"></td>
            <td align="center" >Mengetahui,* <br><br><br><br><hr width="100px"></td>
            <td colspan="2"><ul>- SATPAM </ul><ul>- Staf BAUK </ul></td>
            </tr>
            <tr style="font-size:10px;">
            <td colspan="5">
            <ul><li>Kegiatan mahasiswa dan kegiatan yang memerlukan bantuan sarana/prasarana/protokoler, kolom ”Mengetahui” diketahui oleh Kasubbag Umum.</li><li>Kegiatan promosi wajib membuat laporan kegiatan dan copy laporan kegiatan diserahkan ke Kasubbag Umum.</li></ul>
            </td>
            </tr>
        </table>
        </div>
        '; 
$html.= '<div class="row" style="padding-top:15px">
        <table border="0" width="100%" cellspacing="0">
            <tr style="font-size:10px;">
                <td style="background-color:black;">Footer</td>
            </tr>
        </table>
        </div>';

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
ob_end_clean();
$dompdf->stream('bukti peminjaman '.$data1["nim"].'.pdf', array("Attachment"=>0));
?>