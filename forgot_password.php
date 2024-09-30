<!-- forgot_password.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <form method="POST" action="process_forgot_password.php">
        <div>
            <input type="text" id="nameUsername" name="nameUsername" placeholder="Enter your email or username" required />
        </div>
        <div>
            <input type="submit" value="Submit" name="submit" />
        </div>
    </form>
</body>
</html>
