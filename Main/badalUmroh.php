<?php
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Badal Haji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/tentang.css" />

    <style>
        @media (max-width: 768px) {
            .shadow-container img {
                width: 70%; /* Make the image take the full width of its container */
                height: auto; /* Maintain aspect ratio */
            }

            .shadow-container {
                width: 90%; /* Adjust the container width for better fit on mobile */
                margin: 0 auto; /* Center the container */
            }

            .containerHome .col-4 {
                width: 1000%;
                font-size: small; /* Adjust text size for better readability on mobile */
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>

    <div class="containerHome section3">
        <br>
        <div class="row justify-content-center">
            <div class="col-3 shadow-container" style="">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 2"); ?>
                <?php foreach ($rows as $row) : ?>
                    <div class="">
                        <br><br>
                        <img class="shadow-image" src="../Admin/img/<?php echo $row['image']; ?>" alt="" style="max-width: 100%; height: auto; display: block; margin: 0 auto; border-radius: 8px; box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
                        -webkit-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
                        -moz-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);"><br><br>
                    </div>
                <?php endforeach; ?>
            </div>
            <br><br>
        </div>

        <div class="row justify-content-center">
            <div class="col-4" style="text-align: justify; color: white; width: 50%; padding: 10px; margin: 10px; background: none;  border: 0px solid black; border-radius: 8px; background-color: #0D3C63; ">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 2"); ?>
                <?php foreach ($rows as $row) : ?>
                    <a><?php echo $row["deskripsi"]; ?></a><br><br>
                <?php endforeach; ?>
            </div>
            <br><br>
        </div>
    </div>
    <br>
    <br>

    <section class="achievementss">
        <br><br><br><br>
    </section>

    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>
    <?php include 'wa.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>
