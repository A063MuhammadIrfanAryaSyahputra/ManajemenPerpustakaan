<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// session_start();

include('koneksi.php');

// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT id_user, username, password FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verifikasi password dengan password_verify
        if (password_verify($password, $row['password'])) {
            // Menyimpan session setelah login berhasil
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            // Redirect ke dashboard setelah login berhasil
            header("Location: dashboard.php");
            exit(); // Memastikan tidak ada output lain sebelum redirect
        } else {
            // Pesan kesalahan untuk password salah
            $error_message = "Password Salah";
        }
    } else {
        // Pesan kesalahan jika user tidak ditemukan
        $error_message = "User tidak ditemukan";
    }
    
    // Menampilkan pesan kesalahan
    echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>$error_message</div>";
}

// Menutup koneksi setelah penggunaan
$stmt->close();
$conn->close();
?>
