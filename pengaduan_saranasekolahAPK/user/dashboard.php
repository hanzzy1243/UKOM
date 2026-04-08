<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] != 'user') {
    header("Location: ../login.php");
    exit;
}
?>

 <h2>Dashboard User</h2>
 <a href="form_pengaduan.php">Buat pengaduan</a>
 <a href="data_pengaduan.php">Lihat pengaduan</a>
 <a href="../logout.php">Logout</a>