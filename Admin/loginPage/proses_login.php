<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// session_start();

include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // var buat ga kena sql injection
    $stmt = $conn->prepare("SELECT id_user, username, password FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // verifikasi hash password
        if (password_verify($password, $row['password'])) {
            // simpan sesi
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            // redirect ke dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // pass salah
            $error_message = "Password Salah";
        }
    } else {
        // kalo not found
        $error_message = "User tidak ditemukan";
    }

    // Menampilkan pesan kesalahan
    echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>$error_message</div>";
}

$stmt->close();
$conn->close();
