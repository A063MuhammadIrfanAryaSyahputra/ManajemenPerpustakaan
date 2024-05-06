<?php
include 'koneksi.php'; // Sesuaikan dengan nama file koneksi yang benar

// Periksa apakah form telah disubmit
if (isset($_POST['tambah'])) 
{
    // Ambil data dari form
    $nama = $_POST['paket_nama'];
    $deskripsi = $_POST['paket_deskripsi'];
    $harga = $_POST['paket_harga'];

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
    $sql = "INSERT INTO paket1(paket_nama, paket_deskripsi, paket_harga) VALUES ('$nama', '$deskripsi', '$harga')";
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
    $sql = "UPDATE paket1 SET paket_nama='$nama', paket_deskripsi='$deskripsi', paket_harga='$harga' WHERE paket_id=$id";
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
    $sql = "SELECT * FROM paket1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["paket_id"] . " - Nama: " . $row["paket_nama"] . " - Deskripsi: " . $row["paket_deskripsi"] . " - Harga: " . $row["paket_harga"] . "<br>";
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
