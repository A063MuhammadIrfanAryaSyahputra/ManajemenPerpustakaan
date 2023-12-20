<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Perpustakaan</title>
</head>
    <link rel="stylesheet" type="text/css" href="css/tampil.css">

<body>

<div>
    
    <h2>Daftar Buku</h2>
    <a href="searching.php">Cari Buku</a>
    <table border="1" >
        <tr>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>No</th>
            <th>Kategori</th>
        </tr>

        <?php
        
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
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else 
        
        {
            echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
    <a href="tambah.php">Tambah Buku Baru</a>
    </div>
</body>

</html>
