<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM images";
$result = $conn->query($sql);

echo "<h2>Images</h2>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row["title"] . "</h3>";
        echo '<img src="uploads/'.$row["image"].'" width="300">';
        echo "</div>";
    }
} else {
    echo "No images found.";
}
$conn->close();
?>
