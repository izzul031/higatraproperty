<?php
include '../../kon/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM reasons WHERE id = $id";
mysqli_query($conn, $query);

header('Location: index.php');
