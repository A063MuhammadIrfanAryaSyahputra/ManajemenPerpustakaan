<!DOCTYPE html>
<html>

<head>
    <title>Manajemen Perpustakaan</title>
</head>
<link rel="stylesheet" type="text/css" href="css/tazpil.css">



<body>

    <div>
        <?php

        include 'koneksi.php';

        //session
        session_start();

        // cek session
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../auth/login.php"); // Redirect to login page if not logged in
            exit();
        }

        echo "Halo, " . $_SESSION['username'] . "! .";
        ?>
        <a href="../auth/proses_logout.php">Logout</a><br><br>

    </div>


    <!-- konten dah -->
    <div class="dashboard-content">

        <h2>Daftar Buku</h2>


        <a href="searching.php">Cari Buku</a><br><br>
        <a href="tambah.php">Tambah Buku Baru</a><br><br>
        <a href="../auth/dashboard.php">Dashboard</a><br><br>


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
                // //session
                // session_start();

                // // cek session
                // if (!isset($_SESSION['user_id'])) {
                //     header("Location: ../auth/login.php"); // Redirect to login page if not logged in
                //     exit();
                // }

                // welcome dashboard
                // echo "Halo, " . $_SESSION['username'] . "! Anda telah login.";

                // Ambil data buku dari database
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
                        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                ?>
            </table>
        </div>
        <br><br>
        <!-- <a href="../auth/proses_logout.php">Logout</a><br><br> -->

    </div>
</body>

</html>