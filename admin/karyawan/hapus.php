<?php
include '../../kon/koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
header('Location: index.php');
