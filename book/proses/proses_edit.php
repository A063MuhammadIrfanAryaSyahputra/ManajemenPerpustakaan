<?php
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


    $sql = "UPDATE buku SET judul_buku='$judul', pengarang_buku='$pengarang', penerbit_buku='$penerbit', tahun_buku='$tahun', isbn='$isbn', kategori_buku='$kategori', stok='$stok' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
