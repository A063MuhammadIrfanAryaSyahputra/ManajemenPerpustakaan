<!DOCTYPE html>
<html>

<head>
    <title>My Borrowed Books</title>
</head>

<body>
    <h1>My BorroweXd Books</h1>
    <a href="index.php">Go back to borrow more books</a>

    <?php

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
    $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.user_id = $user_id AND pinjam_buku.returned=0";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>My Borrowed Books</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['judul_buku']} by {$row['pengarang_buku']} <a href='kembali.php?book_id={$row['id']}'>Kembalikan</a></li>";
        }
        echo "</ul>";
    } else {
        echo "You haven't borrowed any books yet.";
    }

    $conn->close();
    ?>


</body>

</html>