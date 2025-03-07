<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form action="tambah_proses.php" method="POST">
        <label>Judul:</label>
        <input type="text" name="judul" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" required><br>
        <label>Tahun:</label>
        <input type="number" name="tahun" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
