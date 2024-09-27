<?php
include '../../kon/koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM testimonials WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
