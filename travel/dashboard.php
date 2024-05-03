<!DOCTYPE html>
<html>

<head>
    <title>Manajemen Paket Haji</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="global.css">

<body>

    <h2>Tambah Paket Haji</h2>
    <form action="proses_dashboard.php" method="post">
        Nama: <input type="text" name="paket_nama"><br>
        Deskripsi: <input type="text" name="paket_deskripsi"><br>
        Harga: <input type="text" name="paket_harga"><br>
        <input type="submit" name="tambah" value="Tambah Paket Haji">
    </form>


    <hr>

    <h2>Daftar Paket Haji</h2>
    <div style="max-height: 500px; overflow-y: auto;">
        <table class="table table-bordered">
            <tr>
                <th>Paket</th>
                <th>Deskripsi</th>
                <th>Biaya</th>
                <th>Opsi</th>

            </tr>
            <?php
            include 'koneksi.php'; // Sesuaikan dengan nama file koneksi yang benar

            // Tampilkan daftar paket haji
            // $paketHaji = tampilkanPaketHaji();
            $sql = "SELECT * FROM paket1";
            $result = $conn->query($sql);


            // Perulangan untuk menampilkan setiap paket haji dalam baris tabel
            if ($result->num_rows > 0) { {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["paket_nama"] . "</td>";
                        echo "<td>" . $row["paket_deskripsi"] . "</td>";
                        echo "<td>Rp. " . number_format($row["paket_harga"], 0, ',', '.') . "</td>";

                        echo "<td><a href='edit.php?id=" . $row["paket_id"] . "' class='btn btn-warning btn-sm'>Edit</a> | 
                                  <a href='hapus.php?paket_id=" . $row["paket_id"] . "' class='btn btn-danger btn-sm'>
                        
                        <svg xmlns='' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5' />
                        </svg> Hapus</a></td>";

                        echo "</tr>";
                        echo "</tr>";
                    }
                }
            }
            ?>

        </table>
    </div>

    

</body>

</html>