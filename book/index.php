<!DOCTYPE html>
<html>

<head>
    <title>Manajemen Perpustakaan</title>
</head>
<link rel="stylesheet" type="text/css" href="css/tazpil.css">
<link rel="stylesheet" href="../global.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


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
        <a href="../auth/dashboard.php">Kembali</a>
        <a href="../auth/proses_logout.php">Logout</a><br><br>

    </div>


    <!-- konten dah -->
    <div class="dashboard-content">
    
        <h2>Daftar Buku</h2>
        <div class="more-space">
            <a href="searching.php" class="btn btn-primary"><i class="bi bi-search"></i>  Cari Buku</a>
            <a href="tambah.php" class="btn btn-success"><i class="bi bi-plus-square-fill"></i>  Tambah Buku</a>
            

        </div>

        <!-- 
        <button type="button" class="btn btn-success bi bi-plus-square-fill" href="tambah.php">
            <span class="ms-1">Tambah Buku</span>
        </button><br><br> -->
        <!-- <i class="bi bi-journal-plus"></i> -->
        <!-- <i ></i> -->
        <!-- <a  href="tambah.php">Tambah Buku Baru</a><br><br> -->
        <!-- <a href="../auth/dashboard.php">Dashboard</a><br><br> -->


        <div style="max-height: 500px; overflow-y: auto;">
            <table class="table table-bordered" >
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


                        echo "<td><a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Edit</a> | 
                                  <a href='hapus.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>
                        
                        <svg xmlns='' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5' />
                        </svg> Hapus</a></td>";

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
    <!-- <div style="z-index: 999" id="footer">
        <br />
        <a href="https://xlmdlx.xyz/about" style="font-family: 'Arial', Times, serif; font-size: 14px" class="footermain">© 2024
            forssellfritz/khindy zharifany, attribution</a>
        <br /><br />
    </div> -->

    <?php include '../footer.php'; ?>



</body>
</body>

</html>


<!-- © 2024 forssellfritz/khindy zharifany, attribution -->