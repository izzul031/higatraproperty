<?php
session_start();
session_unset();  // Menghapus semua variabel sesi
session_destroy();  // Menghancurkan sesi
header("Location: ../../home-login.php");  // Redirect ke halaman home-login.php
exit();
