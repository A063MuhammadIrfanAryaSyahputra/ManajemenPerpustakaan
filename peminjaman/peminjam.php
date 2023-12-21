<!DOCTYPE html>
<html>

<head>
    <title>Peminjam</title>
    <link rel="stylesheet" href="css/pinjam_lihat.css">

</head>

<body>
    <!-- opening -->
    <div class="center">
    <h1 >Peminjam Buku</h1>

    </div>
    <a href="../auth/dashboard.php">Kembali</a>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../auth/login.php"); // Redirect to login page if not logged in
        exit();
    }

    // Database connection
    include 'koneksi.php';


    // Assuming user ID is 1, replace with your user ID logic
    $user_id = $_SESSION['user_id']; // Replace this with your actual user ID logic

    // Fetch borrowed books for the current user
    // $sql = "SELECT buku.judul_buku, buku.pengarang_buku FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.user_id = $user_id";
    // $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku, user.username FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id  INNER JOIN user ON pinjam_buku.user_id = user.id  WHERE pinjam_buku.user_id = $user_id AND pinjam_buku.returned=0";
    // $sql = "SELECT * FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.returned=0";
    $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku, user.username 
        FROM pinjam_buku 
        INNER JOIN buku ON pinjam_buku.book_id = buku.id 
        INNER JOIN user ON pinjam_buku.user_id = user.user_id 
        WHERE  pinjam_buku.returned = 0";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // echo "<h2>Buku Saya</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['judul_buku']} Dipinjam Oleh {$row['username']} </li>";
        }
        echo "</ul>";
    } else 
    {
        echo "Tidak Ada Peminjam Buku.";
    }

    $conn->close();
    ?>


</body>

</html>