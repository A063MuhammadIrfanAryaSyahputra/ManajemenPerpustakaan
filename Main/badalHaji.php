<?php
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<style>
    /* warna warna bg section */
    .section1 {
        width: 100%;
        margin: auto;
        height: auto;
        /* border: 2px solid red; */
        align-items: center;
        text-align: center;
    }

    .section2 {
        width: 100%;
        margin: auto;
        height: auto;
        /* border: 2px solid red; */
        align-items: center;
        text-align: center;
        background-color: #EEBE48;
    }


    .section3 {
        width: 100%;
        margin: auto;
        height: auto;
        /* border: 2px solid red; */
        align-items: center;
        text-align: center;
        /* background-color: #FFDF7B; */

    }
</style>

<body>



    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>


    <div class="containerHome section3">
        <br>


        <div class="row justify-content-center">

            <!-- <p style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 30px;">Kesan Bersama Amansa</p> -->

            <div class="col-3" style="padding: 10px; margin: 10px; background: none; text-align: center; border: 0px solid black; border-radius: 8px; background-color: #FFDF7B;">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 1"); ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td>
                            <!-- <h1><?php echo $row["nama"]; ?></h1> -->
                        </td>
                        <div class="">
                            <!-- <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td> -->
                            <!-- <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" style="max-width: 100%; height: auto; display: block; margin: 0 auto;" alt="Placeholder Image"> -->
                            <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt="" style="max-width: 100%; height: auto; display: block; margin: 0 auto;"></td>
                        </div>
                    </tr>
                <?php endforeach; ?>

            </div>
            <br><br>
        </div>

        <div class="row justify-content-center">

            <!-- <p style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 30px;">Kesan Bersama Amansa</p> -->

            <div class="col-3" style="text-align: left; color: white;width:75%; padding: 10px; margin: 10px; background: none; text-align: left; border: 0px solid black; border-radius: 8px; background-color: #0D3C63;font-weight: bold;">
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 1"); ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td></td>
                            <a style=""><?php echo $row["deskripsi"]; ?></a><br><br>
                        </td>
                        <div class="">
                            <!-- <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td> -->
                            <!-- <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" style="max-width: 100%; height: auto; display: block; margin: 0 auto;" alt="Placeholder Image"> -->
                            <!-- <td><a><?php echo $row["nama"]; ?></a></td> -->
                        </div>
                    </tr>
                    
                <?php endforeach; ?>
                

            </div>
            <br><br>
        </div>
        




    </div>
    <br>
    <br>

    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>