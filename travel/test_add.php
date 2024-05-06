<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Haji</title>
</head>
<body>
    <h2>Formulir Data Haji</h2>
    <form action="test.php" method="post"> <!-- Ganti "proses.php" dengan nama file PHP yang berisi skrip untuk memproses data -->
        <label for="nama_haji">Nama Haji:</label><br>
        <input type="text" id="nama_haji" name="nama_haji"><br><br>
        
        <label for="detail_haji">Detail Haji:</label><br>
        <textarea id="detail_haji" name="detail_haji"></textarea><br><br>
        
        <label for="harga_haji">Harga Haji:</label><br>
        <input type="text" id="harga_haji" name="harga_haji"><br><br>
        
        <label for="jenis_haji">Jenis Haji:</label><br>
        <input type="text" id="jenis_haji" name="jenis_haji"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
