<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['level'] != 'user') {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2 style="text-align:center;">Dashboard User</h2>

    <div class="menu">
        <a href="form_pengaduan.php">Buat Pengaduan</a>
        <a href="data_pengaduan.php">Lihat Pengaduan</a>
        <a href="../logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
 
