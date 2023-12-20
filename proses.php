<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $penerbit = $_POST["pengarang"];
    $genre = $_POST["tahun_terbit"];

    $sql = "INSERT INTO buku (judul, pengarang, tahun_terbit) VALUES ('$judul', '$penerbit', '$genre')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
