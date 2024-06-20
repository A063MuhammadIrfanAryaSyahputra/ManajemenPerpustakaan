<?php
// Konfigurasi database
include '../koneksi.php';

// ambil data dari form sebelum
$nama_haji = $_POST['nama_haji'];
$detail_haji = $_POST['detail_haji'];
$harga_haji = $_POST['harga_haji'];
$jenis_haji = $_POST['jenis_haji'];

//query sql
$sql = "INSERT INTO paket_haji (nama_haji, detail_haji, harga_haji, jenis_haji)
VALUES ('$nama_haji', '$detail_haji', '$harga_haji', '$jenis_haji')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan";
    header("Location: ../dashboard.php"); // redirect
    exit(); // stop

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection database
$conn->close();
?>
