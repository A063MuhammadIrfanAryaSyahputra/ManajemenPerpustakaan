<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" type="text/css" href="../global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">



</head>

<body>
    <div class="content">
        <h2>Edit Buku</h2>

        <?php
        include 'koneksi.php';

        $id = $_GET["id"];
        $sql = "SELECT * FROM buku WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
            <form action="proses/proses_edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label for="judul_buku">Judul Buku:</label>
                <input type="text" name="judul_buku" value="<?php echo $row['judul_buku']; ?>"><br>

                <label for="pengarang_buku">Pengarang Buku:</label>
                <input type="text" name="pengarang_buku" value="<?php echo $row['pengarang_buku']; ?>"><br>

                <label for="penerbit_buku">Penerbit Buku:</label>
                <input type="text" name="penerbit_buku" value="<?php echo $row['penerbit_buku']; ?>"><br>

                <label for="tahun_buku">Tahun Buku:</label>
                <input type="text" name="tahun_buku" value="<?php echo $row['tahun_buku']; ?>"><br>

                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>"><br>

                <label for="kategori_buku">Kategori Buku:</label>
                <input type="text" name="kategori_buku" value="<?php echo $row['kategori_buku']; ?>"><br>

                <label for="stok">Stok Buku:</label>
                <input type="text" name="stok" value="<?php echo $row['stok']; ?>"><br>


                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        <?php
        } else {
            echo "Data tidak ditemukan";
        }
        ?>
            <button class="btn btn-link tombol-red" onclick="window.location.href='index.php'">Batal</button>
    </div>

    <?php include '../footer.php'; ?>


</body>

</html>