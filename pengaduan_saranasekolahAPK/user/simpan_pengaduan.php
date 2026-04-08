<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$lokasi = $_POST['lokasi'];
$jenis = $_POST['jenis'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "../upload/" . $foto);

mysqli_query($conn, "INSERT INTO pengaduan(nama,kelas,lokasi,jenis,deskripsi) VALUES('$nama', '$kelas', '$lokasi', '$jenis', '$deskripsi')");

header("Location: data_pengaduan.php");
 ?>