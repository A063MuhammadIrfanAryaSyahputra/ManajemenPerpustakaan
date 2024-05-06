<?php
// Check if image id is provided
if(isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Connect to database
    $db = new mysqli("localhost", "root", "", "travelDB");

    // Retrieve image path from database
    $query = "SELECT image_path FROM images WHERE id=$image_id";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $image_path = $row['image_path'];

    // Delete image file from server
    unlink($image_path);

    // Delete image record from database
    $delete_query = "DELETE FROM images WHERE id=$image_id";
    $db->query($delete_query);

    // Close database connection
    $db->close();

    // Redirect to display_images.php
    header("Location: display_images.php");
    exit();
} else {
    echo "Image ID not provided.";
}
?>
