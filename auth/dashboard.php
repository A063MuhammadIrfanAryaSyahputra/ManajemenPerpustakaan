<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="../global.css">

</head>

<body>

    <?php

    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php"); // Redirect to login page if not logged in
        exit();
    }
    ?>

    <div class="container mt-4">
        <div class="dashboard-content">
            <p>Halo, <?php echo $_SESSION['username']; ?>! <br><br></p>

            <div class="btn-group">
                <a href="../peminjaman/index.php" class="btn btn-primary">Pinjam Buku</a>
                <a href="../peminjaman/pinjam_lihat.php" class="btn btn-primary">Kembalikan Buku</a>
                <a href="../book/index.php" class="btn btn-primary">Cek Katalog Buku</a>
                <a href="../peminjaman/peminjam.php" class="btn btn-primary">Cek Peminjam Buku</a>
                <a href="proses_logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>

</html>