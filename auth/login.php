<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="../global.css">

</head>

<body>
    <div class="container">
        <div class="title-reg">
            <h2>FORM LOGIN</h2>
        </div>

        <div class="form-reg">
            <form action="proses_login.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br><br>

                    <input type="submit" value="Login" class="btn btn-primary">

                    <!-- <div style="text-align: center;">
                    <a >Belum Punya Akun?</a>
                    </div> -->
                   

                    <button class="log-button btn btn-success" onclick="window.location.href='register.php'">Register</button>
                </div>
            </form>
        </div>
    </div>
    <?php include '../footer.php'; ?>

</body>

</html>
