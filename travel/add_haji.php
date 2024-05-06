<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="css/center.css">
<link rel="stylesheet" href="css/global.css">

<!-- <link rel="stylesheet" type="text/css" href="css/tambah.css"> -->


<h2>Tambah Paket Haji</h2>
<div class="form-reg">
    <form action="auth/proses_dashboard.php" method="post"> <!-- Ganti "proses.php" dengan nama file PHP yang berisi skrip untuk memproses data -->
        <label for="nama_haji">Nama Haji:</label><br>
        <input type="text" id="nama_haji" name="nama_haji" required><br><br>
        
        <label for="detail_haji">Detail Haji:</label><br>
        <input type="text" id="detail_haji" name="detail_haji"></input><br><br>
        
        <label for="harga_haji">Harga Haji:</label><br>
        <input type="text" id="harga_haji" name="harga_haji"required><br><br>
        
        <label for="jenis_haji">Jenis Haji:</label><br>
        <input type="text" id="jenis_haji" name="jenis_haji"required><br><br>
        
        <!-- <input type="submit" value="Tambah" class="btn btn-primary"> -->
        <button type="submit" class="btn btn-success tombol-white">Tambah</button>

        <button class="btn btn-link tombol-red" onclick="window.location.href='dashboard.php'">Batal</button>

    </form>
    </div>