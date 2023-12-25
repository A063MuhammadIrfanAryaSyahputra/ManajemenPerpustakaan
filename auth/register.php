<!DOCTYPE html>
<html>

<head>
    <title>User Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="../global.css">

</head>

<style>
    .captcha-container {
        display: flex;
        align-items: center;
    }

    .captcha-container img {
        margin-right: 10px;
        margin-bottom: 14px ;
    }
</style>

<body>
    <div class="container">
        <div class="title-reg">
            <h2>FORM REGISTRASI</h2>
        </div>

        <div class="form-reg">
            <form action="proses_register.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required="" placeholder="Username" oninvalid="this.setCustomValidity('Anda belum input username')">
                    <br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" required="" placeholder="Password" oninvalid="this.setCustomValidity('Anda belum input password')">
                    <br><br>
                    
                    <div class="captcha-container">
                        <img src="captcha.php" alt="CAPTCHA">
                        <input type="text" id="captcha" name="captcha" required="" placeholder="" oninvalid="this.setCustomValidity('Mohon masukkan captcha')"> 
                    </div>

                    <input type="submit" value="Register" class="btn btn-warning">
                    <button class="log-button" onclick="window.location.href='login.php'">Login</button>
                </div>
            </form>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>