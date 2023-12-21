<!DOCTYPE html>
<html>

<head>
    <title>Library</title>
</head>

<body>

    <?php

    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../auth/login.php"); // Redirect to login page if not logged in
        exit();
    }

    // Database connection
    include 'koneksi.php';


    // Fetch all available books
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Buku Tersedia</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['judul_buku']} by {$row['pengarang_buku']} <a href='pinjam.php?book_id={$row['id']}'>Pinjam</a></li>";
        }
        echo "</ul>";
    } else {
        echo "No books available";
    }

    $conn->close();
    ?>

    <h2>View Borrowed Books</h2>
    <a href="pinjam_lihat.php">View My Borrowed Books</a>
    <br>
    <a href="../auth/dashboard.php">Dashboard</a>

</body>

</html>