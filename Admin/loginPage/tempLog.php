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
<body>



    <!-- navbar -->
    <?php include 'navbarAmansa.php'; ?>


    <div class="containerHome section3">
    <div class="title-reg">
            <h2>FORM LOGIN</h2>
        </div>

        <div class="form-reg">
            <form action="proses_login.php" method="post">
                <div>
                    <label for="username" style="color: grey;">Username:</label>
                    <input type="text" id="username" name="username" required style="background-color: white; color: black;"><br><br>

                    <label for="password" style="color: grey;">Password:</label>
                    <input type="password" id="password" name="password" required style="background-color: white; color: black;"><br><br>

                    <input type="submit" value="Login" class="btn btn-primary">
                   
                    <!-- <button class="log-button btn btn-success" onclick="window.location.href='register.php'">Register</button> -->
                </div>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footerAmansa.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>