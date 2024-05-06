<?php
// Konfigurasi database
include '../koneksi.php';

// Mendapatkan data dari form atau sumber lainnya
$nama_haji = $_POST['nama_haji'];
$detail_haji = $_POST['detail_haji'];
$harga_haji = $_POST['harga_haji'];
$jenis_haji = $_POST['jenis_haji'];

// Membuat query SQL untuk memasukkan data
$sql = "INSERT INTO paket_haji (nama_haji, detail_haji, harga_haji, jenis_haji)
VALUES ('$nama_haji', '$detail_haji', '$harga_haji', '$jenis_haji')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan";
    header("Location: ../dashboard.php"); // Sesuaikan dengan halaman tujuan
    exit(); // Penting untuk menghentikan eksekusi skrip setelah mengarahkan

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>
