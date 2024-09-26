<?php
include '../../kon/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM partners WHERE id = $id";
mysqli_query($conn, $query);

header('Location: index.php');
