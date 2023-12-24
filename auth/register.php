<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="../global.css">

    <style>
        /* Additional CSS to customize the form */
        .container {
            margin-top: 100px;
        }

        .title-reg {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-reg {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-reg label {
            font-weight: bold;
        }

        .form-reg input[type="text"],
        .form-reg input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-reg input[type="submit"],
        .form-reg .log-button {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }

        .form-reg input[type="submit"] {
            background-color: #007bff;
        }

        .form-reg .log-button {
            background-color: #28a745;
        }

        .form-reg input[type="submit"]:hover,
        .form-reg .log-button:hover {
            opacity: 0.9;
        }
    </style>
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

                    <label for="captcha">Enter the text from the image:</label><br>
                    <img src="captcha.php" alt="CAPTCHA"><br>
                    <input type="text" id="captcha" name="captcha" ><br><br>

                    <input type="submit" value="Register">
                    <button class="log-button" onclick="window.location.href='login.php'">Login</button>
                </div>
            </form>
        </div>
    </div>
    <?php include '../footer.php'; ?>
</body>

</html>
