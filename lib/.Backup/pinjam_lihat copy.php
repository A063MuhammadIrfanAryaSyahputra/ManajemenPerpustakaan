<!DOCTYPE html>
<html>

<head>
    <title>Buku Dipinjam</title>
    <link rel="stylesheet" href="css/pinjam_lihat.css">
    <link rel="stylesheet" type="text/css" href="../global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <!-- opening -->
    <div class="center">
        <h1>Buku Dipinjam</h1>


    </div>
    <a href="../auth/dashboard.php">Kembali</a>

    <?php

    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../auth/login.php"); // Redirect to login page if not logged in
        exit();
    }

    // Database connection
    include 'koneksi.php';


    // verif session ke user
    $user_id = $_SESSION['user_id']; // Replace this with your actual user ID logic

    // query borrowed books for the current user
    // $sql = "SELECT buku.judul_buku, buku.pengarang_buku FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.user_id = $user_id";
    $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.user_id = $user_id AND pinjam_buku.returned=0";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // echo "<h2>Buku Saya</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['judul_buku']} Oleh {$row['pengarang_buku']}<a> ||  </a><a href='kembali.php?book_id={$row['id']}'>Kembalikan</a></li>";
        }
        echo "</ul>";
    } else {
        echo "You haven't borrowed any books yet.";
    }

    $conn->close();
    ?>

    <?php include '../footer.php'; ?>


</html>