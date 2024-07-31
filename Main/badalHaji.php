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

</head>
<body>



    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>


    <div class="containerHome section3">
        <br>


        <div class="row justify-content-center">
            <div class="col-3" style="">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 1"); ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td>
                        </td>
                        <div class="">
                            <br><br>

                            <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt="" style="max-width: 100%; height: auto; display: block; margin: 0 auto; box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-webkit-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);
-moz-box-shadow: 2px 2px 52px 19px rgba(13,60,99,0.75);  border-radius: 8px;"></td>
<br><br>
                        </div>
                    </tr>
                <?php endforeach; ?>

            </div>
            <br><br>
        </div>

        <div class="row justify-content-center">

            <div class="col-3" style="text-align: justify;  text-justify: inter-word; color: white;width:50%; padding: 10px; margin: 10px; background: none; border: 0px solid black; border-radius: 8px; background-color: #0D3C63;">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 1"); ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td></td>
                            <a style=""><?php echo $row["deskripsi"]; ?></a><br><br>
                        </td>
                        <div class="">
                        </div>
                    </tr>
                    
                <?php endforeach; ?>
                

            </div>
            <br><br>
        </div>
        




    </div>
    <br>
    <br>

    <section class="achievementss">
    <br><br><br><br><br>

    </div>
  </section>

    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>
    

    <script src="js/script.js"></script>
</body>

</html>