<?php
include 'koneksi.php'; // Sesuaikan dengan nama file koneksi yang benar

if(isset($_GET['paket_id'])) {
    $paket_id = $_GET['paket_id'];
    
    // Query untuk menghapus paket haji dengan id yang sesuai
    $sql = "DELETE FROM paket1 WHERE paket_id = $paket_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Paket haji berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    // Redirect kembali ke halaman daftar paket haji setelah menghapus
    header("Location: dashboard.php");
    exit();
} else {
    echo "ID tidak ditemukan";
}
?>
