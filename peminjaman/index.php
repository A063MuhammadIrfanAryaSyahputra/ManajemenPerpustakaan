<!DOCTYPE html>
<html>

<head>
    <title>Library</title>
    <link rel="stylesheet" href="css/pinjam_lihat.css">

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
        // echo "<h2>Buku Tersedia</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {

            // echo "<li >{$row['judul_buku']} by {$row['pengarang_buku']} <a href='pinjam.php?book_id={$row['id']}'>Pinjam</a></li>";
        }
        echo "</ul>";
    } else {
        echo "No books available";
    }

    $conn->close();
    ?>

    <!-- <a href="../book/index.php">List</a> -->
    <!-- <a href="pinjam_lihat.php">Buku Saya</a> -->
    <br>
    <a href="../auth/dashboard.php">Dashboard</a>

    <div class="dashboard-content">

        <h2>Pinjam Buku</h2>

        <div style="max-height: 500px; overflow-y: auto;">
            <table border="1">
                <tr>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Opsi</th>
                </tr>

                <?php

                include 'koneksi.php';

                $sql = "SELECT * FROM buku";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["judul_buku"] . "</td>";
                        echo "<td>" . $row["pengarang_buku"] . "</td>";
                        echo "<td>" . $row["penerbit_buku"] . "</td>";
                        echo "<td>" . $row["tahun_buku"] . "</td>";
                        echo "<td>" . $row["isbn"] . "</td>";
                        echo "<td>" . $row["kategori_buku"] . "</td>";
                        echo "<td>" . $row["stok"] . "</td>";
                        // echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                        // echo "<td><a href='pinjam.php?id=" . $row["id"] . "'>Pinjam</a></td>";
                        echo "<td><a href='pinjam.php?book_id={$row['id']}'>Pinjam</a></td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                ?>
            </table>
        </div>



</body>

</html>