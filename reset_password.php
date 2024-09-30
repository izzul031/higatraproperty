<!-- reset_password.php -->
<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Cari token di database
    include('db_connection.php');
    $query = "SELECT * FROM password_resets WHERE token = ? AND expires_at > NOW()";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token valid, tampilkan form reset password
        echo '<form method="POST" action="process_reset_password.php">
                <input type="hidden" name="token" value="' . $token . '" />
                <div class="form-outline mb-4 input-group">
                  <input type="password" class="form-control form-control-lg py-3" name="new_password" placeholder="New Password" required />
                </div>
                <div class="form-outline mb-4 input-group">
                  <input type="password" class="form-control form-control-lg py-3" name="confirm_password" placeholder="Confirm New Password" required />
                </div>
                <div class="d-flex justify-content-center input-group">
                  <input type="submit" value="Reset Password" name="reset" class="btn btn-custom2 btn-block btn-lg text-light my-2 py-3" />
                </div>
              </form>';
    } else {
        echo "Invalid or expired token!";
    }
}
?>
