<?php
require '../../../connection.php';
include '../session.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $itenary1 = $_POST['itenary1'];
    $itenary2 = $_POST['itenary2'];
    $itenary3 = $_POST['itenary3'];
    $itenary4 = $_POST['itenary4'];

    $sql = "UPDATE haji SET nama = '$name', deskripsi = '$deskripsi', itenary1 = '$itenary1', itenary2 = '$itenary2', itenary3 = '$itenary3', itenary4 = '$itenary4' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Handle first image upload
        if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
            $imageTmpPath = $_FILES['new_image']['tmp_name'];
            $imageName = $_FILES['new_image']['name'];
            $uploadFileDir = '../../img/';
            $dest_path = $uploadFileDir . $imageName;

            if(move_uploaded_file($imageTmpPath, $dest_path)) {
                $sql = "UPDATE umroh SET image = '$imageName' WHERE id = $id";
                $conn->query($sql);
            }
        }

        // Handle second image upload
        if (isset($_FILES['new_second_image']) && $_FILES['new_second_image']['error'] === UPLOAD_ERR_OK) {
            $secondImageTmpPath = $_FILES['new_second_image']['tmp_name'];
            $secondImageName = $_FILES['new_second_image']['name'];
            $uploadFileDir = '../../img/';
            $secondDestPath = $uploadFileDir . $secondImageName;

            if (move_uploaded_file($secondImageTmpPath, $secondDestPath)) {
                $sql = "UPDATE haji SET cover = '$secondImageName' WHERE id = $id";
                $conn->query($sql);
            }
        }

        header("Location: paketHaji.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>