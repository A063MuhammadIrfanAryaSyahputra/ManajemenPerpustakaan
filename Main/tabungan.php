<?php
require '../connection.php';

// Check if image ID is provided in URL parameter
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from the database
    $sql = "SELECT * FROM umroh WHERE id = " . $image_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive Navbar</title>
    <link rel="stylesheet" type="text/css" target="_blank" href="css/paketUmroh.css" />
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />


<body>
    <?php include 'navbarAmansa.php'; ?>



    <div class="containerUmroh">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <h1 style="color: #E0B64A; font-weight: bold;">COMING SOON</h1>
    </div>
    </div>

    </div>

    <?php include 'footerAmansa.php'; ?>






    <script src="js/script.js"></script>
</body>

</html>