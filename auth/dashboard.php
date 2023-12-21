<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
    <?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php"); // Redirect to login page if not logged in
        exit();
    }

    // Display dashboard content
    echo '<div class="dashboard-content">';
    // echo "Halo, " . $_SESSION['user_id'] . "! Anda sedang login.";

    echo "Halo, " . $_SESSION['username'] . "!. <br><br>";


    echo '<a href="../peminjaman/index.php">Pinjam Buku</a>';
    echo '<a>  ||  </a>';
    echo '<a href="../book/index.php">Cek Katalog Buku</a>';
    echo '<a>  ||  </a>';

    echo '<a href="../peminjaman/peminjam.php">Cek Peminjam Buku</a>';
    echo '<a>  ||  </a>';

    echo '<a href="proses_logout.php">Logout</a>';
    echo '</div>';
    ?>
</body>
</html>
