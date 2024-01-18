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

    // Validasi tahun & Stok
    if (!is_numeric($tahun)) {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
        Error : Tahun Harus Berupa Angka</div>";
        // echo "<meta http-equiv='refresh' content='1.3;url=../edit.php?id=$id'>"; // Redirects 

        exit;
    }

    if (!is_numeric($stok)) {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
        Error : Stok Harus Berupa Angka</div>";
        // echo "<meta http-equiv='refresh' content='1.3;url=../edit.php?id=$id'>"; // Redirects 

        exit;
    }

    // Validation for stok (stock) as a number
    $sql = "UPDATE buku SET judul_buku='$judul', pengarang_buku='$pengarang', penerbit_buku='$penerbit', tahun_buku='$tahun', isbn='$isbn', kategori_buku='$kategori', stok='$stok' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
