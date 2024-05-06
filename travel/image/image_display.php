<?php
// Database connection
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Images</title>
    <style>
        .image-container {
            text-align: center;
            /* Center align the contents of the div */
            margin-bottom: 0px;
            /* Add some bottom margin for spacing */
        }

        .image-container img {
            display: inline-block;
            /* Make the image behave like an inline element */
            max-width: 100%;
            /* Ensure the image doesn't exceed its container's width */
        }
    </style>
</head>

<body>


    <?php
    $sql = "SELECT * FROM images";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='image-container'>";
            // echo "<h3>" . $row["title"] . "</h3>";
            echo '<img src="uploads/' . $row["image"] . '" width="1920">';
            echo "</div>";
        }
    } else {
        echo "No images found.";
    }
    $conn->close();
    ?>

</body>

</html>