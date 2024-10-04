<?php
include '../../kon/koneksi.php';

// Hapus gambar berdasarkan ID
$id = $_GET['id'];
$conn->query("DELETE FROM legalitas WHERE id = $id");

header("Location: index.php"); // Redirect ke halaman admin
