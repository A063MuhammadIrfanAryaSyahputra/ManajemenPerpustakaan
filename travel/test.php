<?php
// Konfigurasi database
$servername = "localhost"; // Ganti dengan nama server MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "DBHaji"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

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
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
$conn->close();
?>
