<!DOCTYPE html>
<html>

<head>
    <title>Manajemen Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="css/searching.css">
    <link rel="stylesheet" href="../global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <?php
            //session
            session_start();

            // cek session
            if (!isset($_SESSION['user_id'])) {
                header("Location: ../auth/login.php"); // Redirect to login page if not logged in
                exit();
            }
    ?>

    <div class="pencarian">
        <form action="" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table class="table">
        <tr>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>No</th>
            <th>Kategori</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';

        if (!empty($_GET['cari'])) {
            $cari = $_GET['cari'];
            $sql = "SELECT * FROM buku WHERE judul_buku LIKE '%$cari%'";
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
                    echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada hasil untuk kata kunci '$cari'</td></tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Masukkan kata kunci untuk melakukan pencarian.</td></tr>";
        }
        ?>
    </table>

    <div>
        <br><br>
        <a href="index.php">Kembali ke Daftar Buku</a>
    </div>

    <?php include '../footer.php'; ?>


</body>

</html>