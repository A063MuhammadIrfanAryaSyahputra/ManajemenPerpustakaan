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

        // Validasi tahun & Stok
        if (!is_numeric($tahun)) {
            echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
            Error : Tahun Harus Berupa Angka</div>";
            echo "<meta http-equiv='refresh' content='1.3;url=../tambah.php?id=$id'>"; // Redirects 
    
            exit;
        }

    
        if (!is_numeric($stok)) {
            $_SESSION['form_data'] = $_POST; // Store the form data in the session

            echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
            Error : Stok Harus Berupa Angka</div>";
            echo "<meta http-equiv='refresh' content='1.3;url=../tambah.php?id=$id'>"; // Redirects 
    
            exit;
        }

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
