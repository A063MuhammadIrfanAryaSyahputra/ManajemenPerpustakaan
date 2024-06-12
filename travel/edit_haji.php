<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Haji</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/center.css">
</head>
<body>

<div class="content">
    <h2>Edit Paket Haji</h2>
    <?php
    include 'koneksi.php';

    $id = $_GET["id_haji"];
    $sql = "SELECT * FROM paket_haji WHERE id_haji=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
    ?>
    
    <div class="form-reg">
        <form action="auth/proses_edit.php" method="post">
            
            <input type="hidden" name="id_haji" value="<?php echo $id; ?>">


            <label for="nama_haji">Nama Paket Haji:</label><br>
            <input type="text" id="nama_haji" name="nama_haji" required value="<?php echo $row['nama_haji']; ?>"><br><br>

            <label for="detail_haji">Detail Paket Haji:</label><br>
            <input type="text" id="detail_haji" name="detail_haji" required value="<?php echo $row['detail_haji']; ?>"></input><br><br>

            <label for="harga_haji">Harga Paket Haji:</label><br>
            <input type="text" id="harga_haji" name="harga_haji" required value="<?php echo $row['harga_haji']; ?>"><br><br>

            <label for="jenis_haji">Jenis Haji:</label><br>
            <input type="text" id="jenis_haji" name="jenis_haji" required value="<?php echo $row['jenis_haji']; ?>"><br><br>

            <input type="submit" value="Simpan" class="btn btn-primary">

        </form>
        <button class="btn btn-link tombol-red" onclick="window.location.href='dashboard.php'">Batal</button>

    </div>
</div>

</body>
</html>
