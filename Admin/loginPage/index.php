<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../Main/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />


    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: "Spinnaker", sans-serif;
            font-weight: 400;
            font-style: normal;
        }


        .containerHome {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding-bottom: 50px;
            padding-top: 50px;


        }

        .form-reg {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .title-reg img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .form-reg label {
            color: #d4af37;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-reg input[type="text"],
        .form-reg input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-reg input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0d6efd;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .form-reg input[type="submit"]:hover {
            background-color: #0b5ed7;
        }

        .footer {
            background-color: #1b2940;
            color: #d4af37;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <!-- <?php include 'navbarLogin.php'; ?> -->
    <?php include dirname(__DIR__) . '/../navbarAmansa.php';?>



    <div class="containerHome section3">
        <div class="form-reg">
            <div class="title-reg">
                <img src="../../Main/assets/logoHorizon.png" alt="Amansa Tours & Travel">
            </div>
            <form action="proses_login.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br><br>

                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footerLogin.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>