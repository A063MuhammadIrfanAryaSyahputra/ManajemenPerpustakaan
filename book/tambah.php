<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku Baru</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
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



    <div>
    <h2>Tambah Buku Baru</h2>

    <form action="proses/proses_tambah.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'];  ?> ">

                <label for="judul_buku">Judul Buku:</label> 
                <input type="text" name="judul_buku"required value="<?php echo $row['judul_buku']; ?>"><br>

                <label for="pengarang_buku">Pengarang Buku:</label>
                <input type="text" name="pengarang_buku"required value="<?php echo $row['pengarang_buku']; ?>"><br>

                <label for="penerbit_buku">Penerbit Buku:</label>
                <input type="text" name="penerbit_buku"required value="<?php echo $row['penerbit_buku']; ?>"><br>

                <label for="tahun_buku">Tahun Buku:</label>
                <input type="text" name="tahun_buku"required value="<?php echo $row['tahun_buku']; ?>"><br>

                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn"required value="<?php echo $row['isbn']; ?>"><br>

                <label for="kategori_buku">Kategori Buku:</label>
                <input type="text" name="kategori_buku"required value="<?php echo $row['kategori_buku']; ?>"><br>

                <label for="stok">Stok Buku:</label>
                <input type="text" name="stok"required value="<?php echo $row['stok']; ?>"><br>

                <!-- <input type="submit" value="Simpan"> -->

                <input type="submit" value="Simpan" class="btn btn-primary">
                

            </form>
            <button class="btn btn-link tombol-red" onclick="window.location.href='index.php'">Batal</button>

            <!-- <button type="cancel" class="btn btn-primary btn-lg btn-block">Block level button</button> -->
            <!-- <button type="cancel" href="index.php" value="Batal" class="btn btn-danger"> -->

    <!-- <a class="btn btn-primary" href="index.php">Kembali ke Daftar Buku</a> -->

    </div>
    <!-- <div style="z-index: 999" id="footer">
        <br />
        <a href="https://xlmdlx.xyz/about" style="font-family: 'Arial', Times, serif; font-size: 14px" class="footermain">© 2024
            forssellfritz/khindy zharifany, attribution</a>
        <br /><br />
    </div> -->
    <?php include '../footer.php'; ?>


</body>
</html>
