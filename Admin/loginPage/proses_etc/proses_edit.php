<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $id_haji = $_POST["id_haji"];
    $nama_haji = $_POST["nama_haji"];
    $detail_haji = $_POST["detail_haji"];
    $harga_haji = $_POST["harga_haji"];
    $jenis_haji = $_POST["jenis_haji"];

    // Validasi harga_haji (price)
    if (!is_numeric($harga_haji)) {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Error : Harga Harus Berupa Angka</div>";
        exit;
    }

    // Prepared statement to prevent SQL injection
    $sql = "UPDATE paket_haji SET nama_haji=?, detail_haji=?, harga_haji=?, jenis_haji=? WHERE id_haji=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $nama_haji, $detail_haji, $harga_haji, $jenis_haji, $id_haji);

    if ($stmt->execute()) {
        header("Location: ../dashboard.php");
    } else {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Error: Gagal memperbarui data</div>";
        // Log the actual error for debugging: echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
