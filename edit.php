<?php
include 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form action="edit_proses.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <label>Judul:</label>
        <input type="text" name="judul" value="<?= $row['judul']; ?>" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="<?= $row['penulis']; ?>" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" required><br>
        <label>Tahun:</label>
        <input type="number" name="tahun" value="<?= $row['tahun']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
