<?php
// Include connection file
require_once 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Display admin dashboard
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>You are now logged in.</p>
</body>

</html>