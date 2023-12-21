<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id = $_POST["id"];
    $judul = $_POST["judul_buku"];
    $pengarang = $_POST["pengarang_buku"];
    $penerbit = $_POST["penerbit_buku"];
    $tahun = $_POST["tahun_buku"];
    $isbn = $_POST["isbn"];
    $kategori = $_POST["kategori_buku"];
    $stok = $_POST["stok"];

    $sql = "INSERT INTO buku (judul_buku, pengarang_buku, penerbit_buku, tahun_buku, isbn, kategori_buku, stok) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn', '$kategori', '$stok')";

    if ($conn->query($sql) === TRUE) 
    {
        header("Location: ../index.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
