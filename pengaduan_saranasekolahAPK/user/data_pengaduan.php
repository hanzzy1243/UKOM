<?php 
include '../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pengaduan");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengaduan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2 style="text-align:center;">Data Pengaduan</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Status</th>
        </tr>

         <?php while($d = mysqli_fetch_array($data)){ ?>
        <tr>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['lokasi']; ?></td>
            <td><?= $d['status']; ?></td>
        </tr>
         <?php } ?>
    </table>

    <a href="dashboard.php" class="back">← Kembali ke Dashboard</a>
</body>
</html>
