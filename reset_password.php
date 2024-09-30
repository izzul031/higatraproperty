<?php
// reset_password.php
if (!isset($_GET['token'])) {
    echo "Invalid token!";
    exit;
}
$token = $_GET['token'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <form method="POST" action="process_reset_password.php?token=<?php echo $token; ?>">
        <div>
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required />
        </div>
        <div>
            <input type="submit" name="reset_password" value="Reset Password" />
        </div>
    </form>
</body>
</html>
