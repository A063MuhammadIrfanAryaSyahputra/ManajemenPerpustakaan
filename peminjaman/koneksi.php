<?php

// cek session
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php"); // Redirect to login page if not logged in
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus1";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
