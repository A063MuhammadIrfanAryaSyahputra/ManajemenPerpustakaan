<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="title-reg">
            <h2>FORM REGISTRASI</h2>
        </div>

        <div class="form-reg">
            <form action="proses_register.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br><br>

                    <input type="submit" value="Register">
                    <button class="log-button" onclick="window.location.href='login.php'">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
