<?php
include '../koneksi.php';

$success_message = '';
$error_message = '';

if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

if (isset($_POST["submit"])) {
    $image_title = $_POST['image_title'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    // Check if file is an image
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        $error_message = "Hanya file gambar yang diizinkan.";
    } elseif ($_FILES['image']['size'] > 5000000) { // Check file size (5MB)
        $error_message = "Ukuran gambar terlalu besar. Maksimal 5MB.";
    } elseif (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

        $sql = "INSERT INTO images (image_title, image) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $image_title, $image);

        if ($stmt->execute()) {
            $success_message = "Gambar berhasil diunggah.";
        } else {
            $error_message = "Error dalam mengeksekusi pernyataan SQL: " . $stmt->error;
        }
    } else {
        $error_message = "Error dalam mengunggah gambar.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Unggah Gambar</title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../global.css">
</head>

<body>


    <form method="post" enctype="multipart/form-data">
        <?php if (!empty($success_message)) : ?>
            <div class="alert alert-success" role="alert"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <?php if (!empty($error_message)) : ?>
            <div class="alert alert-danger" role="alert"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <input type="text" name="image_title" placeholder="Masukkan Judul"><br>
        <input type="file" name="image"><br><br>
        <input type="submit" name="submit" value="Upload" class="btn btn-primary">
        <a href="image_display.php" class="btn btn-link tombol-red">Batal</a>
    </form>
</body>

</html>