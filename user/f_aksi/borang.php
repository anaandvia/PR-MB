<?php 
include '../../admin/koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../../admin/f_cek/PHPMailer/src/Exception.php';
    require '../../admin/f_cek/PHPMailer/src/OAuth.php';
    require '../../admin/f_cek/PHPMailer/src/PHPMailer.php';
    require '../../admin/f_cek/PHPMailer/src/POP3.php';
    require '../../admin/f_cek/PHPMailer/src/SMTP.php';

$id_peminjam        = htmlspecialchars($_POST['id_peminjam']);
$id_ruangan         = htmlspecialchars($_POST['id_ruangan']);
$nama_kegiatan      = htmlspecialchars($_POST['nama_kegiatan']);
$tgl_acara          = htmlspecialchars($_POST['tgl_acara']);
$tgl_akhir_acara    = htmlspecialchars($_POST['tgl_akhir_acara']);
$PJ                 = htmlspecialchars($_POST['PJ']);
$PK                 = htmlspecialchars($_POST['PK']);
$PA                 = htmlspecialchars($_POST['PA']);
$n_tamu             = htmlspecialchars($_POST['n_tamu']);
$sifat_acara        = htmlspecialchars($_POST['sifat_acara']);
$jenis_acara        = htmlspecialchars($_POST['jenis_acara']);
$keterangan         = htmlspecialchars($_POST['keterangan']);
$status             = 0;

$sql = mysqli_query($koneksi,"INSERT INTO peminjaman (id_peminjaman, id_peminjam, id_ruangan, nama_kegiatan, tgl_acara, tgl_akhir_acara,status,tgl_acc) VALUES ('','$id_peminjam','$id_ruangan','$nama_kegiatan','$tgl_acara','$tgl_akhir_acara','$status','0000-00-00')");

$id_peminjaman = mysqli_insert_id($koneksi);

$sql2 = mysqli_query($koneksi,"INSERT INTO detail_acara VALUES ('','$id_peminjaman','$PJ','$PA','$PK','$n_tamu','$sifat_acara','$jenis_acara','$keterangan')");

$sql3 = mysqli_query($koneksi,"INSERT INTO pengembalian VALUES ('','','$id_peminjaman','','','$status','','0000-00-00')");

// ambil email admin
$query = mysqli_query($koneksi,"SELECT*FROM peminjam WHERE level = 'admin'");
// ambil nama user
$query1 = mysqli_query($koneksi,"SELECT*FROM peminjam WHERE id_peminjam = '$id_peminjam'");
$data2 = mysqli_fetch_array($query1);
$nama = $data2['nama'];
// ambil email user
$query2 = mysqli_query($koneksi,"SELECT*FROM ruangan WHERE id_ruangan = '$id_ruangan'");
$data3 = mysqli_fetch_array($query2);
$ruangan = $data3['no_ruangan'] ."-". $data3['nama_ruangan'];

if($sql && $sql2 && $sql3 == true){
        while ($data1 = mysqli_fetch_array($query)){
                        
            //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'use your own email';

        //Password to use for SMTP authentication
        $mail->Password = 'use your own password';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@yourwebsite.com', 'PR-MB Service');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($data1['email'], $data1['nama']);

        //Set the subject line
        $mail->Subject = 'Peminjaman Ruangan '.$ruangan.' | PR-MB';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Peminjaman Ruangan ".$ruangan." oleh ".$nama." Pada ".$tgl_acara." 
        <br> Untuk lihat Detail Peminjaman , Klik Link Berikut :
        <br> http://localhost/PR-MB/admin/view/peminjaman.php" ;
        
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Peminjaman Ruangan';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo "<script>alert('Data berhasil dikirimkan. Tunggu konfirmasi Admin');window.location='../view/history.php';</script>";
        }
    }
}else{
    echo "<script>alert('Data gagal dikirimkan.');window.location='../view/peminjaman.php?id2='.$id_ruangan.'';</script>";
}
?>