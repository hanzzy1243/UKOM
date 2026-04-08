<?php
include '../koneksi.php';
$data = mysqli_query($conn,"SELECT * FROM pengaduan");
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
    <table border="1">
    <tr>
    <th>Nama</th><th>Lokasi</th><th>Jenis</th><th>Deskripsi</th><th>Status</th><<th>Aksi</th>
    </tr>

    <?php while($d = mysqli_fetch_array($data)){ ?>
    <tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['lokasi']; ?></td>
    <td><?=$d['jenis']; ?></td>
    <td><?=$d['deskripsi']; ?></td>
    <td><?= $d['status']; ?></td>

    <td>
    <a href="ubah_status.php?id=<?= $d['id']; ?>&status=Diproses">Proses</a>
    <a href="ubah_status.php?id=<?= $d['id']; ?>&status=Selesai">Selesai</a>
    <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>

    </tr>
    <?php } ?>
    </table>
    <a href="dashboard.php" class="logout">Kembali ke dashboard</a>
</body>
</html>
