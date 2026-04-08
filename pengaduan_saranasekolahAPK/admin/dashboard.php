<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pengaduan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2 style="text-align:center;">Dashboard Admin</h2>
    <div class="menu">
    <a href="data_pengaduan.php">Kelola Pengaduan</a>
    <a href="../logout.php" class="logout">Logout</a>
</div>
</body>
</html>
 
