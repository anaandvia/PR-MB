<?php
// include database connection file
include '../koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../f_cek/PHPMailer/src/Exception.php';
    require '../f_cek/PHPMailer/src/OAuth.php';
    require '../f_cek/PHPMailer/src/PHPMailer.php';
    require '../f_cek/PHPMailer/src/POP3.php';
    require '../f_cek/PHPMailer/src/SMTP.php';

$id_peminjaman = $_POST['id_peminjaman'];
$id_ruangan = $_POST['id_ruangan'];
$status = $_POST['status'];
$nim = $_POST['nim'];
$tgl= date('Y-m-d');

// Ambil data user
$query2 = mysqli_query($koneksi, "SELECT*FROM peminjam WHERE nim ='$nim'");
$data3 = mysqli_fetch_array($query2);
// ambil email user
$email = $data3['email'];
// ambil nama user
$nama = $data3['nama'];

// update di setujui
if($status == 1){
    $sql= mysqli_query($koneksi, "UPDATE peminjaman SET status='$status' , tgl_acc ='$tgl' WHERE id_peminjaman='$id_peminjaman'");
    $sql2 = mysqli_query($koneksi,"UPDATE ruangan SET status= 0 WHERE id_ruangan='$id_ruangan'");
    // kondisi
    if($sql && $sql2 == true){
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
    $mail->addAddress($email, $nama);

    //Set the subject line
    $mail->Subject = 'Peminjaman Ruangan DI SETUJUI | PR-MB';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $body = "Hi, ".$nama."<br>Peminjaman Ruangan Telah <strong style='color:green;'>DI SETUJUI </strong>";
    
    $mail->Body = $body;
    //Replace the plain text body with one created manually
    $mail->AltBody = 'Peminjaman Ruangan';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo "<script>alert('Data Berhasil DiUbah');window.location='../view/peminjaman.php';</script>";
        }
    }else{
        echo "<script>alert('Data gagal diubah.');window.location='../view/peminjaman.php';</script>";
    }
}else if($status == 2){
        $sql= mysqli_query($koneksi, "UPDATE peminjaman SET status='$status' , tgl_acc ='$tgl' WHERE id_peminjaman='$id_peminjaman'");
        $sql2 = mysqli_query($koneksi,"UPDATE ruangan SET status= 1 WHERE id_ruangan='$id_ruangan'");
        if($sql && $sql2 == true){
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
        $mail->addAddress($email, $nama);
    
        //Set the subject line
        $mail->Subject = 'Peminjaman Ruangan DI TOLAK | PR-MB';
    
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$nama."<br>Peminjaman Ruangan <strong style='color:red;'>DI TOLAK </strong>";
        
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Peminjaman Ruangan';
    
            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: '. $mail->ErrorInfo;
            } else {
                echo "<script>alert('Data Berhasil DiUbah');window.location='../view/peminjaman.php';</script>";
            }
    }else{
        echo "<script>alert('Data gagal diubah.');window.location='../view/peminjaman.php';</script>";
    }
}else{
    $sql= mysqli_query($koneksi, "UPDATE peminjaman SET status='$status' , tgl_acc ='$tgl' WHERE id_peminjaman='$id_peminjaman'");
    $sql2 = mysqli_query($koneksi,"UPDATE ruangan SET status= 0 WHERE id_ruangan='$id_ruangan'");
    if($sql && $sql2){
        echo "<script>alert('Data Berhasil DiUbah');window.location='../view/peminjaman.php';</script>";
    }else {
        echo "<script>alert('Data Gagal DiUbah');window.location='../view/peminjaman.php';</script>";
    }
}
?>