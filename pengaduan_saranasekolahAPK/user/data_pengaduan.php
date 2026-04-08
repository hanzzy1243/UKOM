<?php 
include '../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pengaduan");
 ?>

<h2>Data Pengaduan</h2>
<table border="1">
<tr>
<th>Nama</th><th>Lokasi</th><th>Status</th>
</tr>

<?php while($d = mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $d['nama']; ?></td>
<td><?= $d['lokasi']; ?></td>
<td><?= $d['status']; ?></td>
</tr>
<?php } ?>
</table>

<a href="dashboard.php"><-Kembali ke dashboard</a>