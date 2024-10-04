<?php
session_start();
include_once('db_connection.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa pengguna
    $sql = "SELECT * FROM `users` WHERE `username` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Please Fill Username');</script>";
        exit;
    } else {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $storedPassword = $row['password'];

            // Verifikasi password
            if (password_verify($password, $storedPassword)) {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                header('location:admin/welcome/');
            } else {
                echo "<script>alert('Invalid Username or Password');</script>";
                exit;
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }
}
?>
