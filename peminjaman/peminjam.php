<!DOCTYPE html>
<html>

<head>
    <title>Peminjam</title>
    <link rel="stylesheet" href="css/pinjam_lihat.css">
    <link rel="stylesheet" type="text/css" href="../global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



</head>

<body>
    <!-- opening -->
    <div class="center">
        <h1>Peminjam Buku</h1>
    </div>
    <a href="../auth/dashboard.php">Kembali</a>

    <div style="max-height: 500px; overflow-y: auto;">
        <table class="table table-bordered">
            <tr>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Peminjam</th>
                <th>Tanggal</th>
            </tr>

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
            // $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku, user.username FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id  INNER JOIN user ON pinjam_buku.user_id = user.id  WHERE pinjam_buku.user_id = $user_id AND pinjam_buku.returned=0";
            // $sql = "SELECT * FROM pinjam_buku INNER JOIN buku ON pinjam_buku.book_id = buku.id WHERE pinjam_buku.returned=0";
            $sql = "SELECT buku.id, buku.judul_buku, buku.pengarang_buku, user.username, pinjam_buku.date2
                    FROM pinjam_buku 
                    INNER JOIN buku ON pinjam_buku.book_id = buku.id 
                    INNER JOIN user ON pinjam_buku.user_id = user.user_id 
                    WHERE  pinjam_buku.returned = 0";


            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // echo "<h2>Buku Saya</h2>";
                // echo "<ul>";
                while ($row = $result->fetch_assoc()) { 

                    echo "<tr>";
                    echo "<td>" . $row["judul_buku"] . "</td>";
                    echo "<td>" . $row["pengarang_buku"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["date2"] . "</td>";
                    echo "</tr>";
                }
                

                // echo "</ul>";
            } else {
                echo "<tr><td colspan='4'>Tidak Ada Peminjam Buku.</td></tr>";

            }

            $conn->close();
            ?>


        </table>


    </div>




    <?php include '../footer.php'; ?>


</body>

</html>