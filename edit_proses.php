<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = trim($_POST['judul']);
    $penulis = trim($_POST['penulis']);
    $penerbit = trim($_POST['penerbit']);
    $tahun = trim($_POST['tahun']);

    if (empty($judul) || empty($penulis) || empty($penerbit) || empty($tahun)) {
        die("Semua field harus diisi!");
    }

    if (!is_numeric($tahun) || strlen($tahun) != 4) {
        die("Tahun harus berupa angka 4 digit!");
    }

    $stmt = $conn->prepare("UPDATE buku SET judul=?, penulis=?, penerbit=?, tahun=? WHERE id=?");
    $stmt->bind_param("sssii", $judul, $penulis, $penerbit, $tahun, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengupdate buku!";
    }

    $stmt->close();
    $conn->close();
}
?>
