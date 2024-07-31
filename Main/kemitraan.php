<?php
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Badal Umroh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/tentang.css" />
</head>

<style>
    /* Add this to your CSS file */
.text-container {
    font-size: 1rem; /* Default font size for larger screens */
}

@media (max-width: 767px) {
    .text-container {
        font-size: 0.8rem; /* Smaller font size for mobile devices */
    }
}

</style>

<body>
    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>
    <div class="containerHome section3">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6" style="">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM kemitraan WHERE id = 1"); 
                foreach ($rows as $row) :
                ?>
                <br><br>
                    <div class="tabura">
                        <br>
                        <img src="../Admin/img/<?php echo $row['image']; ?>" alt="" class="img-fluid" style="box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-webkit-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-moz-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);  border-radius: 8px;">
<br><br>
                        <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="" class="img-fluid" style="box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-webkit-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-moz-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);  border-radius: 8px;">
<br>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-8 text-container" style="text-align: justify; text-justify: inter-word; width: 60%; inter-word; color: white; padding: 10px; margin: 10px; background: none;  border: 0px solid black; border-radius: 8px; background-color: #0D3C63; ">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM kemitraan WHERE id = 1"); 
                foreach ($rows as $row) :
                ?>
                    <div>
                        <a><?php echo $row["deskripsi"]; ?></a><br><br>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br><br>
    </div>
    <br><br>

    <section class="achievementss">
    <br><br><br><br><br>

    </section>
    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
