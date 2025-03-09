<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = trim($_POST['judul']);
    $penulis = trim($_POST['penulis']);
    $penerbit = trim($_POST['penerbit']);
    $tahun = trim($_POST['tahun']);

    if (empty($judul) || empty($penulis) || empty($penerbit) || empty($tahun)) {
        die("Error: Semua field harus diisi!");
    }

    if (strlen($judul) > 255) {
        die("Error: Judul terlalu panjang! Maksimum 255 karakter.");
    }

    if (!is_numeric($tahun) || strlen($tahun) != 4) {
        die("Error: Tahun harus berupa angka 4 digit!");
    }

    $stmt = $conn->prepare("INSERT INTO buku (judul, penulis, penerbit, tahun) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $judul, $penulis, $penerbit, $tahun);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: Gagal menambahkan buku!";
    }

    $stmt->close();
    $conn->close();
}
?>
