<?php
// Establish database connection
include('koneksi.php');

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Check if the username already exists
    $check_query = "SELECT username FROM user WHERE username = '$username'";
    $check_result = $conn->query($check_query);
    session_start(); 
    $userInput = $_POST['captcha'];
    $captchaText = isset($_SESSION['captcha']) ? $_SESSION['captcha'] : '';
    if ($userInput === $captchaText) 
    {
        // echo 'CAPTCHA verification successful!';
        if ($check_result->num_rows > 0) {
            echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Username Sudah Ada </div>";
            echo "<div id='countdown' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>3</div>";
            echo "
            <script>
                var count = 3;
                var countdown = setInterval(function() {
                    if (count > 1) {
                        document.getElementById('countdown').innerHTML = --count;
                    } else {
                        clearInterval(countdown);
                        window.location.href = 'register.php';
                    }
                }, 1000);
            </script>";
        } else 
        {
            // Insert user data into the database
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashedPassword')";
    
            if ($conn->query($sql) === TRUE) 
            {
                echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Registrasi Berhasil, anda akan diarahkan ke menu login dalam </div>";
                echo "<div id='countdown' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>3</div>";
                echo "
                <script>
                    var count = 3;
                    var countdown = setInterval(function() {
                        if (count > 1) {
                            document.getElementById('countdown').innerHTML = --count;
                        } else {
                            clearInterval(countdown);
                            window.location.href = 'login.php';
                        }
                    }, 1000);
                </script>";
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Proceed with logic here if needed
    } 
    
    else 
    {
        echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Captcha Salah</div>";
        echo "<div id='countdown' style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>3</div>";
        echo "
        <script>
            var count = 2;
            var countdown = setInterval(function() {
                if (count > 1) {
                    document.getElementById('countdown').innerHTML = --count;
                } else {
                    clearInterval(countdown);
                    window.location.href = 'register.php';
                }
            }, 1000);
        </script>";
        $conn->close();
    }
    
    unset($_SESSION['captcha']);
} 



$conn->close();
?>
