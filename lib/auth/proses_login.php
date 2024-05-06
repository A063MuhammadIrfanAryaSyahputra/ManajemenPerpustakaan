<?php
session_start();

include('koneksi.php');


// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Retrieve user 
    $sql = "SELECT id_user, username, password FROM user WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $row['password'])) 
        {
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php"); // Redirect ke dashboard
            echo "Login Berhasil";
        } 
        
        else 
        {
            echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>Password Salah </div>";

        }

    } 
    
    else 
    {
        echo "User tidak ditemukan";
    }
}

$conn->close();
?>
