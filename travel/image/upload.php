<?php
// Koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah direktori "uploads" sudah ada
if (!file_exists('uploads')) {
    // Jika belum, buat direktori baru
    mkdir('uploads', 0777, true);
}

if(isset($_POST["submit"])) {
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);
    $title = $_POST['title'];
    
    $sql = "INSERT INTO images (title, image) VALUES ('$title', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Gambar berhasil diunggah.";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Unggah Gambar</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Masukkan Judul"><br>
        <input type="file" name="image"><br>
        <input type="submit" name="submit" value="Unggah">
    </form>
</body>
</html>
