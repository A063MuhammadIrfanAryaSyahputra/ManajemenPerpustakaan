<?php
require '../../../connection.php';
include '../session.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];

    // Use an absolute path for testing to avoid relative path issues
    $uploads_dir = '../../img';
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

    // Handle new images upload
    $image_fields = ['new_image1', 'new_image2', 'new_image3', 'new_image4', 'new_image5', 'new_image6', 'new_image7'];
    $images = [];

    foreach ($image_fields as $image_field) {
        if (isset($_FILES[$image_field]) && $_FILES[$image_field]['error'] == 0) {
            $image_type = $_FILES[$image_field]['type'];
            if (in_array($image_type, $allowed_types)) {
                $image_name = uniqid() . '_' . basename($_FILES[$image_field]['name']);
                $target_path = $uploads_dir . '/' . $image_name;

                if (move_uploaded_file($_FILES[$image_field]['tmp_name'], $target_path)) {
                    $images[$image_field] = $image_name;
                } else {
                    echo "Failed to move uploaded file for $image_field<br>";
                }
            } else {
                echo "Invalid image type for $image_field<br>";
            }
        } else {
            if ($_FILES[$image_field]['error'] !== UPLOAD_ERR_NO_FILE) {
                echo "Error uploading file $image_field: " . $_FILES[$image_field]['error'] . "<br>";
            }
        }
    }

    // Fetch current images from the database
    $result = $conn->query("SELECT * FROM galeri WHERE id = $id");
    if ($result->num_rows > 0) {
        $current_images = $result->fetch_assoc();
    } else {
        echo "Error fetching current images: " . $conn->error . "<br>";
        exit;
    }

    // Prepare the SQL update statement
    $sql = "UPDATE galeri SET name = '$name'";

    foreach ($image_fields as $image_field) {
        $column = str_replace('new_', '', $image_field);
        if (isset($images[$image_field])) {
            $sql .= ", $column = '{$images[$image_field]}'";
        } else {
            $sql .= ", $column = '{$current_images[$column]}'";
        }
    }

    $sql .= " WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
        header("Location: photoGaleri.php");
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }

    $conn->close();
}
?>
