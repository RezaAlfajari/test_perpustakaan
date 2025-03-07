<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    $query = "INSERT INTO buku (judul, penulis, penerbit, tahun) VALUES ('$judul', '$penulis', '$penerbit', '$tahun')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>
