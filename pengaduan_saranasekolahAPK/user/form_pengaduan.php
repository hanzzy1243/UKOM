<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan Sarana Sekolah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Buat Pengaduan</h2>

        <form method="POST" action="simpan_pengaduan.php" enctype="multipart/form-data">
            <label>Nama</label>
            <input type="text" name="nama">

            <label>Kelas</label>
            <input type="text" name="kelas">

            <label>Lokasi</label>
            <input type="text" name="lokasi">

            <label>Jenis</label>
            <input type="text" name="jenis">

            <label>Deskripsi</label>
            <textarea name="deskripsi"></textarea>

            <label>Foto</label>
            <input type="file" name="foto">

            <button type="submit">Kirim</button>
        </form>
    </div>
<a href="dashboard.php" class="back">← Kembali ke Dashboard</a>
</body>
</html>

