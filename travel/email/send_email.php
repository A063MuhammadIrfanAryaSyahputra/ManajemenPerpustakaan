<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;               // Enable SMTP authentication
        $mail->Username   = 'archzharfa@gmail.com'; // SMTP username
        $mail->Password   = 'exnw bvft cfav fuif';    // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
        $mail->Port       = 587;                // TCP port to connect to

        //Recipients
        $mail->setFrom('archzharfa@gmail.com', 'Mailer');
        $mail->addAddress('archzharfa@gmail.com', 'Recipient Name'); // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Pesan Pengunjung Amansa';
        $mail->Body    = "Nama: $name<br>Email atau No.HP: $email<br>Pesan: $pesan";

        $mail->send();
        echo 'Pesan berhasil terkirim!';
    } catch (Exception $e) {
        echo "Pesan gagal dikirim Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
