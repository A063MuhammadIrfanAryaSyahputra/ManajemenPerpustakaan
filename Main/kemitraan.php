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

<body>
    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>
    <div class="containerHome section3">
        <br>
        <div class="row justify-content-center">
            <div class="col-6" style="padding: 10px; margin: 10px; background: none; text-align: center; border: 0px solid black; border-radius: 8px; background-color: #FFDF7B;">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM kemitraan WHERE id = 1"); 
                foreach ($rows as $row) :
                ?>
                    <div class="tabura">
                        <img src="../Admin/img/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                        <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="" class="img-fluid">
                    </div>
                <?php endforeach; ?>
            </div>
            <br><br>
        </div>
        <div class="row justify-content-center">
            <div class="col-8" style="text-align: left; color: white; padding: 10px; margin: 10px; background: none; text-align: left; border: 0px solid black; border-radius: 8px; background-color: #0D3C63; font-weight: bold;">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM kemitraan WHERE id = 1"); 
                foreach ($rows as $row) :
                ?>
                    <div>
                        <a><?php echo $row["deskripsi"]; ?></a><br><br>
                    </div>
                <?php endforeach; ?>
            </div>
            <br><br>
        </div>
    </div>
    <br><br>


    <section class="achievementss">
    <br><br><br><br><br>

    </div>
  </section>
    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
