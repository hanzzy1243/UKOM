<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

 <h2>Dashboard Admin</h2>
 <a href="data_pengaduan.php">Kelola Pengaduan</a>
 <a href="../logout.php">Logout</a>