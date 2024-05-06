<?php
// include '../auth/koneksi.php'; // Sesuaikan dengan nama file koneksi yang benar

if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $image_name = basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // File uploaded successfully, now insert into database
        $db = new mysqli("localhost", "root", "", "travelDB");
        $query = "INSERT INTO images (image_name, image_path) VALUES ('$image_name', '$target_file')";
        $result = $db->query($query);
        if($result) {
            echo "Image uploaded and inserted into database successfully.";
        } else {
            echo "Error inserting image into database.";
        }
    } else {
        echo "Error uploading image.";
    }
}
?>
