<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Pastikan sudah menginstal PHPMailer via Composer

if (isset($_POST['submit'])) {
    // Koneksi ke database
    include('db_connection.php');
    
    $usernameEmail = $_POST['usernameEmail'];
    
    // Cek apakah input adalah email atau username
    if (filter_var($usernameEmail, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE email = ?";
    } else {
        $query = "SELECT * FROM users WHERE username = ?";
    }

    // Siapkan statement untuk mencegah SQL Injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $usernameEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Jika user ditemukan
        $user = $result->fetch_assoc();
        $email = $user['email'];
        $token = bin2hex(random_bytes(50)); // Generate random token for reset link
        
        // Simpan token di database dengan masa kadaluarsa
        $query = "INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 1 HOUR))";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $token);
        $stmt->execute();
        
        // Kirim email reset password menggunakan PHPMailer
        $resetLink = "http://localhost/higatraproperty/reset_password.php?token=" . $token;

        $mail = new PHPMailer(true);
        try {
            // Pengaturan server
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'percobaanemail746@gmail.com'; // Ganti dengan email pengirim
            $mail->Password = 'yrjl nihl qifu uheg'; // Ganti dengan password email pengirim
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Pengaturan email
            $mail->setFrom('percobaanemail746@gmail.com', 'Mailer');
            $mail->addAddress($email); // Tambahkan penerima
            $mail->Subject = 'Password Reset Request';
            $mail->Body    = "Click this link to reset your password: " . $resetLink;

            $mail->send();
            echo "A password reset link has been sent to your email address.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "User not found!";
    }
}
?>
