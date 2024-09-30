<?php
// Memasukkan autoload file jika menggunakan Composer
require 'vendor/autoload.php';

// Jika Anda mengunduh manual, gunakan path berikut
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Membuat instance PHPMailer

try {
    // Pengaturan server
    $mail->isSMTP();                                            // Mengatur mailer untuk menggunakan SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Server SMTP Gmail
    $mail->SMTPAuth   = true;                                   // Mengaktifkan otentikasi SMTP
    $mail->Username   = 'percobaanemail746@gmail.com';                // Ganti dengan email Anda
    $mail->Password   = 'yrjl nihl qifu uheg';                 // Ganti dengan password email Anda
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       // Mengaktifkan enkripsi TLS
    $mail->Port       = 587;                                   // Port untuk koneksi SMTP

    // Penerima
    $mail->setFrom('your_email@gmail.com', 'Mailer'); // Ganti dengan email Anda
    $mail->addAddress('recipient@example.com'); // Ganti dengan email penerima

    // Konten email
    $mail->isHTML(true);                                  // Mengatur format email ke HTML
    $mail->Subject = 'Password Reset Request';           // Subjek email
    $mail->Body    = 'Click this link to reset your password: <a href="https://example.com/reset">Reset Password</a>'; // Konten email

    $mail->send();                                        // Mengirim email
    echo 'A password reset link has been sent to your email address.'; // Pesan sukses
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // Pesan error
}
?>
