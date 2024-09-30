<?php
include_once('connection.php');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Prepared statement untuk menghindari SQL injection
    $stmt = $conn->prepare("INSERT INTO `users` (`name`, `username`, `password`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $username, $pass);

    if ($stmt->execute()) {
        header('Location: index.php');
        echo "<script>alert('New User Register Success');</script>";   
    } else {
        die(mysqli_error($conn));
    }
}
?>
