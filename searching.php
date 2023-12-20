<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Perpustakaan</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .pencarian {
            margin-bottom: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .pencarian input[type="text"] {
            width: 300px; /* Adjust the width as needed */
            padding: 8px;
            border-radius: 5px;
            border: 2px solid #ccc;
        }
            
        
        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #B4B4B4;
        }
    </style>
</head>
<body>
    
    <div class="pencarian">
        <form action="" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form>
    </div>
    
    <table  >
        <tr >
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>No</th>
            <th>Kategori</th>
        </tr>
        <?php
    // koneksi.php: include your database connection code here


    include 'koneksi.php';
    
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        $sql = "SELECT * FROM buku WHERE judul_buku LIKE '%$cari%'";
        $result = $conn->query($sql);



        if ($result->num_rows > 0) {
            // Your table header here
            while ($row = $result->fetch_assoc()) {
                // Display the filtered results
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
            echo "<tr><td colspan='6'>Tidak ada hasil untuk kata kunci '$cari'</td></tr>";
        }
    }
    ?>
    

    </table>
    
    <div>
        <br><br>
        <a href="index.php">Kembali ke Daftar Buku</a>
    </div>

</body>
</html>
