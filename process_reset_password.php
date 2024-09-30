<?php
include_once('db_connection.php');

if (isset($_POST['reset_password'])) {
    // Ambil token dari URL
    $token = $_GET['token'];

    // Dapatkan data reset dari tabel password_resets
    $query = "SELECT * FROM password_resets WHERE token = ? AND expires_at > NOW()";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $reset = $result->fetch_assoc();
        $email = $reset['email']; // Ambil email dari kolom email di password_resets

        // Ambil password baru dari form
        $newPassword = password_hash($_POST['new_password'], PASSWORD_BCRYPT); // Hash password baru
        
        // Debugging: Tampilkan nilai yang akan digunakan
        echo "New Password: $newPassword, Email: $email"; // Debugging

        // Periksa apakah pengguna ada dengan kolom username
        $query = "SELECT * FROM users WHERE username = ?"; // Ubah kolom ke username
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email); // Gunakan email sebagai username
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Update password di tabel users
            $query = "UPDATE users SET password = ? WHERE username = ?"; // Pastikan untuk menggunakan username
            $stmt = $conn->prepare($query);
            $stmt->bind_param('ss', $newPassword, $email); // Mengupdate kolom password
            
            // Eksekusi query dan cek hasilnya
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    // Hapus token dari tabel password_resets setelah digunakan
                    $query = "DELETE FROM password_resets WHERE token = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('s', $token);
                    $stmt->execute();
                    echo "Password has been reset successfully!";
                } else {
                    echo "Failed to reset password. No rows affected."; // Tambahan
                }
            } else {
                echo "Failed to reset password. Error: " . $stmt->error; // Tampilkan kesalahan
            }
        } else {
            echo "No user found with that username."; // Ubah pesan debug
        }
    } else {
        echo "Invalid or expired token.";
    }
}
?>
