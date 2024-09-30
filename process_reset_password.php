<?php
if (isset($_POST['reset'])) {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    // Cari email berdasarkan token
    include('db_connection.php');
    $query = "SELECT email FROM password_resets WHERE token = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $email = $user['email'];

        // Update password di tabel users
        $query = "UPDATE users SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $new_password, $email);
        $stmt->execute();

        // Hapus token setelah reset password berhasil
        $query = "DELETE FROM password_resets WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();

        echo "Password has been reset successfully!";
    } else {
        echo "Invalid token!";
    }
}
?>
