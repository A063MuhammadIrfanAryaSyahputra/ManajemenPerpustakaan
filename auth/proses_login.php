<?php
session_start();

include('koneksi.php');


// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Retrieve user data from the database
    $sql = "SELECT user_id, username, password FROM user WHERE username='$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $row['password'])) 
        {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php"); // Redirect to the dashboard or another page upon successful login
        } 
        
        else 
        {
            echo "Password salah";
        }

    } 
    
    else 
    {
        echo "User tidak ditemukan";
    }
}

$conn->close();
?>
