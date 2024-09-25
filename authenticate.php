<?php
session_start();

// Include connection file
require_once 'connection.php';

// Check if the user is trying to access this page directly
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("location: login.php");
    exit;
}

// Retrieve form data
$username = $_POST["username"];
$password = $_POST["password"];

// Query to retrieve admin data
$query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Login successful, create session and redirect to admin dashboard
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    echo json_encode(array("success" => true));
    exit;
} else {
    // Login failed, display error message
    echo json_encode(array("success" => false, "message" => "Invalid username or password"));
    exit;
}
