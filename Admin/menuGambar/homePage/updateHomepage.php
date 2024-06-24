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
    $itenary2 = $_POST['itenary2'];
    $itenary3 = $_POST['itenary3'];
    $itenary4 = $_POST['itenary4'];

    // Prepare the SQL statement with placeholders
    $sql = "UPDATE home SET nama = ?, deskripsi = ?, itenary1 = ?, itenary2 = ?, itenary3 = ?, itenary4 = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $deskripsi, $itenary1, $itenary2, $itenary3, $itenary4, $id);

    if ($stmt->execute() === TRUE) {
        // Handle first image upload
        if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
            $imageTmpPath = $_FILES['new_image']['tmp_name'];
            $imageName = $_FILES['new_image']['name'];
            $uploadFileDir = '../../img/';
            $dest_path = $uploadFileDir . $imageName;

            if (move_uploaded_file($imageTmpPath, $dest_path)) {
                $sql = "UPDATE home SET image = ? WHERE id = ?";
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
                $sql = "UPDATE home SET cover = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $secondImageName, $id);
                $stmt->execute();
            }
        }

        header("Location: homePage.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
