<?php
include '../koneksi.php';

if(isset($_GET['id_haji'])) {
    $id_haji = $_GET['id_haji'];
    
    // Query untuk menghapus paket haji dengan id yang sesuai
    $sql = "DELETE FROM paket_haji WHERE id_haji = $id_haji";
    
    if ($conn->query($sql) === TRUE) {
        echo "Paket haji berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    // Redirect kembali ke halaman daftar paket haji setelah menghapus
    header("Location: ../dashboard.php");
    exit();
} else {
    echo "ID tidak ditemukan";
}
?>
