<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id_haji = $_POST["id_haji"];
    $nama_haji = $_POST["nama_haji"];
    $detail_haji = $_POST["detail_haji"];
    $harga_haji = $_POST["harga_haji"];
    $jenis_haji = $_POST["jenis_haji"];


    // Validasi tahun & Stok
    if (!is_numeric($harga_haji)) {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
        Error : Harga Harus Berupa Angka</div>";
        // echo "<meta http-equiv='refresh' content='1.3;url=../edit.php?id=$id'>"; // Redirects 

        exit;
    }


    // Validation for stok (stock) as a number
    $sql = "UPDATE paket_haji SET nama_haji='$nama_haji', detail_haji='$detail_haji', harga_haji='$harga_haji', jenis_haji='$jenis_haji'WHERE id_haji=$id_haji";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
