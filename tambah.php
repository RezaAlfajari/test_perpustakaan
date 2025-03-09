<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <script>
        function validateForm() {
            let judul = document.forms["bookForm"]["judul"].value.trim();
            let penulis = document.forms["bookForm"]["penulis"].value.trim();
            let penerbit = document.forms["bookForm"]["penerbit"].value.trim();
            let tahun = document.forms["bookForm"]["tahun"].value.trim();

            if (judul === "" || penulis === "" || penerbit === "" || tahun === "") {
                alert("Semua field harus diisi!");
                return false;
            }

            if (isNaN(tahun) || tahun.length !== 4) {
                alert("Tahun harus berupa angka 4 digit!");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form name="bookForm" action="tambah_proses.php" method="POST" onsubmit="return validateForm()">
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
