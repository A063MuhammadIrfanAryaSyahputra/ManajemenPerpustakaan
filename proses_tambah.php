<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id = $_POST["id"];
    $judul = $_POST["judul_buku"];
    $pengarang = $_POST["pengarang_buku"];
    $penerbit = $_POST["penerbit_buku"];
    $tahun = $_POST["tahun_buku"];
    $isbn = $_POST["isbn"];
    $kategori = $_POST["kategori_buku"];

    $sql = "INSERT INTO buku (judul_buku, pengarang_buku, penerbit_buku, tahun_buku, isbn, kategori_buku) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn', '$kategori')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
