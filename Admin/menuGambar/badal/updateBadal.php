<?php
require '../../../connection.php';
include '../../session.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);
    $itenary1 = filter_input(INPUT_POST, 'itenary1', FILTER_SANITIZE_STRING);

    if (!$id || !$name || !$deskripsi) {
        echo "Invalid input.";
        exit;
    }

    // Prepare the SQL statement with placeholders
    $sql = "UPDATE badal SET nama = ?, deskripsi = ? WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssi", $name, $deskripsi, $id);

        if ($stmt->execute()) {
            // Handle image uploads
            $uploadFileDir = '../../img/';

            // Process first image
            if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
                $imageTmpPath = $_FILES['new_image']['tmp_name'];
                $imageName = basename($_FILES['new_image']['name']);
                $imagePath = $uploadFileDir . $imageName;

                // Validate image file
                if (getimagesize($imageTmpPath) !== false && $_FILES['new_image']['size'] <= 2 * 1024 * 1024) { // 2MB max size
                    if (move_uploaded_file($imageTmpPath, $imagePath)) {
                        $sql = "UPDATE badal SET image = ? WHERE id = ?";
                        if ($stmt = $conn->prepare($sql)) {
                            $stmt->bind_param("si", $imageName, $id);
                            $stmt->execute();
                        }
                    } else {
                        echo "Error uploading image.";
                    }
                } else {
                    echo "Invalid image file.";
                }
            }

            // Process second image
            if (isset($_FILES['new_second_image']) && $_FILES['new_second_image']['error'] === UPLOAD_ERR_OK) {
                $secondImageTmpPath = $_FILES['new_second_image']['tmp_name'];
                $secondImageName = basename($_FILES['new_second_image']['name']);
                $secondImagePath = $uploadFileDir . $secondImageName;

                // Validate image file
                if (getimagesize($secondImageTmpPath) !== false && $_FILES['new_second_image']['size'] <= 2 * 1024 * 1024) { // 2MB max size
                    if (move_uploaded_file($secondImageTmpPath, $secondImagePath)) {
                        $sql = "UPDATE badal SET cover = ? WHERE id = ?";
                        if ($stmt = $conn->prepare($sql)) {
                            $stmt->bind_param("si", $secondImageName, $id);
                            $stmt->execute();
                        }
                    } else {
                        echo "Error uploading second image.";
                    }
                } else {
                    echo "Invalid second image file.";
                }
            }

            header("Location: badalHaji.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
