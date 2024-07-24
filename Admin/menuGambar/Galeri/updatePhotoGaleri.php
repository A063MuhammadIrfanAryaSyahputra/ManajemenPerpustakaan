<?php
require '../../../connection.php';
include '../../session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (int)$_POST['id']; // Sanitize and cast to integer
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); // Sanitize the name input

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

                // Verify that the file is actually an image
                if (getimagesize($_FILES[$image_field]['tmp_name']) !== false) {
                    if (move_uploaded_file($_FILES[$image_field]['tmp_name'], $target_path)) {
                        $images[$image_field] = $image_name;
                    } else {
                        echo "Failed to move uploaded file for $image_field<br>";
                    }
                } else {
                    echo "File is not a valid image for $image_field<br>";
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
    $stmt = $conn->prepare("SELECT * FROM galeri WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $current_images = $result->fetch_assoc();
    } else {
        echo "Error fetching current images: " . $conn->error . "<br>";
        exit;
    }

    // Prepare the SQL update statement using prepared statements
    $set_parts = ["name = ?"];
    $params = [$name];
    $types = 's';

    foreach ($image_fields as $image_field) {
        $column = str_replace('new_', '', $image_field);
        if (isset($images[$image_field])) {
            $set_parts[] = "$column = ?";
            $params[] = $images[$image_field];
            $types .= 's'; // Add type for each parameter
        } else {
            $set_parts[] = "$column = ?";
            $params[] = $current_images[$column];
            $types .= 's'; // Add type for each parameter
        }
    }

    $sql = "UPDATE galeri SET " . implode(', ', $set_parts) . " WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Add type for the ID parameter
    $types .= 'i';
    $params[] = $id;

    // Bind parameters
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        echo "Record updated successfully<br>";
        header("Location: photoGaleri.php");
        exit; // Make sure to exit after redirect
    } else {
        echo "Error updating record: " . $stmt->error . "<br>";
    }

    $stmt->close();
    $conn->close();
}
?>
