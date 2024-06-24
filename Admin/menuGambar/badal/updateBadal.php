<?php
require '../../../connection.php';
include '../session.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $itenary1 = $_POST['itenary1'];

    // Prepare the SQL statement with placeholders
    $sql = "UPDATE badal SET nama = ?, deskripsi = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $deskripsi, $id);

    if ($stmt->execute() === TRUE) {
        // Handle first image upload
        if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
            $imageTmpPath = $_FILES['new_image']['tmp_name'];
            $imageName = $_FILES['new_image']['name'];
            $uploadFileDir = '../../img/';
            $dest_path = $uploadFileDir . $imageName;

            if (move_uploaded_file($imageTmpPath, $dest_path)) {
                $sql = "UPDATE badal SET image = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $imageName, $id);
                $stmt->execute();
            }
        }

        // Handle second image upload
        if (isset($_FILES['new_second_image']) && $_FILES['new_second_image']['error'] === UPLOAD_ERR_OK) {
            $secondImageTmpPath = $_FILES['new_second_image']['tmp_name'];
            $secondImageName = $_FILES['new_second_image']['name'];
            $uploadFileDir = '../../img/';
            $secondDestPath = $uploadFileDir . $secondImageName;

            if (move_uploaded_file($secondImageTmpPath, $secondDestPath)) {
                $sql = "UPDATE badal SET cover = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $secondImageName, $id);
                $stmt->execute();
            }
        }

        header("Location: badalHaji.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
