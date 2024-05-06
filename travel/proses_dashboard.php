<?php
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['tambah'])) 
{
    // Ambil data dari form
    $nama = $_POST['nama_haji'];
    $deskripsi = $_POST['detail_haji'];
    $harga = $_POST['harga_haji'];

    // Panggil fungsi tambahPaketHaji
    tambahPaketHaji($nama, $deskripsi, $harga);

    // Redirect atau tindakan lain setelah berhasil menambahkan paket
    header("Location: dashboard.php"); // Sesuaikan dengan halaman tujuan
    exit(); // Penting untuk menghentikan eksekusi skrip setelah mengarahkan
}

include('koneksi.php');
// Membuat koneksi ke database
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menambahkan paket haji
function tambahPaketHaji($nama, $deskripsi, $harga)
{
    global $conn;
    $sql = "INSERT INTO paket_haji(nama_haji, detail_haji, harga_haji) VALUES ('$nama', '$deskripsi', '$harga')";
    if ($conn->query($sql) === TRUE) {
        echo "Paket haji berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengedit paket haji
function editPaketHaji($id, $nama, $deskripsi, $harga)
{
    global $conn;
    $sql = "UPDATE paket_haji SET nama_haji='$nama', detail_haji='$deskripsi', harga_haji='$harga' WHERE id_haji=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Paket haji berhasil diubah.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Menghapus paket haji
function hapusPaketHaji($id)
{
    global $conn;
    $sql = "DELETE FROM paket_haji WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Paket haji berhasil dihapus.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Menampilkan semua paket haji
function tampilkanPaketHaji()
{
    global $conn;
    $sql = "SELECT * FROM paket_haji";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id_haji"] . " - Nama: " . $row["nama_haji"] . " - Deskripsi: " . $row["detail_haji"] . " - Harga: " . $row["harga_haji"] . "<br>";
        }
    } else {
        echo "Tidak ada paket haji.";
    }
}

// Contoh penggunaan fungsi-fungsi di atas
// Menambahkan paket haji
// tambahPaketHaji("Paket Umrah", "Paket umrah selama 10 hari", 5000000);

// Mengedit paket haji dengan ID 1
// editPaketHaji(1, "Paket Haji", "Paket haji selama 40 hari", 15000000);

// Menghapus paket haji dengan ID 2
// hapusPaketHaji(2);

// Menampilkan semua paket haji
// tampilkanPaketHaji();

// Menutup koneksi database
$conn->close();
