<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="css/tampil.css">
</head>
<body>
    <div>
    <form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<!-- 
        <h2>Hasil Pencarian</h2> -->
        <a href="index.php">Kembali ke Daftar Buku</a>
        <table border="1">
            <tr>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>No</th>
                <th>Kategori</th>
            </tr>

            <?php
            include 'koneksi.php';

            if (isset($_GET['cari']) && !empty($_GET['cari'])) {
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
                    echo "<tr><td colspan='6'>Tidak ada hasil yang ditemukan</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Mohon masukkan kata kunci untuk melakukan pencarian.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
