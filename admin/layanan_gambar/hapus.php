<?php
include '../../kon/koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM layanan_gambar WHERE id = $id");
header('Location: index.php');
