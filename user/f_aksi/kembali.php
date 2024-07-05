<?php
// include database connection file
include '../../admin/koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../../admin/f_cek/PHPMailer/src/Exception.php';
    require '../../admin/f_cek/PHPMailer/src/OAuth.php';
    require '../../admin/f_cek/PHPMailer/src/PHPMailer.php';
    require '../../admin/f_cek/PHPMailer/src/POP3.php';
    require '../../admin/f_cek/PHPMailer/src/SMTP.php';

// Ambil data 
$id2 = $_POST['id2'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$foto_b = isset($_FILES['foto_b']['name']) ? $_FILES['foto_b']['name'] : '';
$kendala = $_POST['kendala'];

// ambil nama ruangan
$ruangan = $_POST['nama_ruangan'];

// ambil nim dan nama user
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// ambil email admin
$sql = mysqli_query($koneksi,"SELECT*FROM peminjam WHERE level = 'admin'");

//cek dulu jika merubah gambar produk jalankan coding ini
if($foto_b != "") {
    $ekstensifotoV = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_b); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensifoto = strtolower(end($x));
    $random = rand(1,999);
    $fotoB = $random.'-'.$foto_b;
    $tmpName = $_FILES['foto_b']['tmp_name'];   
    if(in_array($ekstensifoto, $ekstensifotoV) === true)  {
          move_uploaded_file($tmpName, '../../admin/view/asset/img/bukti/'.$fotoB); //memindah file gambar ke folder gambar
                    
                  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                $query ="UPDATE pengembalian SET tgl_pengembalian='$tgl_pengembalian',foto_b='$fotoB',kendala='$kendala', status_kembali=2 WHERE id='$id2'";
                $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_error($koneksi).
                        " - ".mysqli_error($koneksi));
                } else {
                    while ($data1 = mysqli_fetch_array($sql)){
                    
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
                    $mail->Subject = 'Pengembalian Ruangan '.$ruangan.' | PR-MB';

                    //Read an HTML message body from an external file, convert referenced images to embedded,
                    //convert HTML into a basic plain-text alternative body
                    $body = "Pengembalian Ruangan ".$ruangan." oleh ".$nama." Pada ".$tgl_pengembalian." <br> http://localhost/PR-MB/admin/view/pengembalian.php" ;
                    
                    $mail->Body = $body;
                    //Replace the plain text body with one created manually
                    $mail->AltBody = 'Pengembalian Ruangan';

                    //send the message, check for errors
                    if (!$mail->send()) {
                        echo 'Mailer Error: '. $mail->ErrorInfo;
                    } else {
                        echo "<script>alert('Data berhasil dikirimkan. Tunggu konfirmasi Admin');window.location='../view/history.php';</script>";
                    }
                }
            }
            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/kembalikan.php?id='.$id2.'';</script>";
            }
    } else {
        echo "<script>alert('Pilih Gambar Terlebih dahulu.');window.location='../view/kembalikan.php?id='.$id2.'';</script>";
        
}
?>