<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../connection.php';

// Process register form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check if username already exists
    $check_username = $conn->prepare("SELECT id_user FROM user WHERE username=?");
    $check_username->bind_param("s", $username);
    $check_username->execute();
    $check_result = $check_username->get_result();
    
    if ($check_result->num_rows > 0) {
        // Display error message if username already exists
        $error_message = "Username sudah digunakan";
    } else {
        // Hash password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert new user into database
        $insert_stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        $insert_stmt->bind_param("ss", $username, $hashed_password);
        
        if ($insert_stmt->execute()) {
            // Redirect to login page after successful registration
            header("Location: ../loginPage/index.php");
            exit();
        } else {
            // Display error message if registration fails
            $error_message = "Registrasi gagal. Silakan coba lagi.";
        }
    }
    
    // Display error message
    echo "<div style='position: absolute; top: 48%; left: 50%; transform: translate(-50%, -50%); text-align: center;'>$error_message</div>";
}

// Close connection
if (isset($check_username)) {
    $check_username->close();
}
if (isset($insert_stmt)) {
    $insert_stmt->close();
}
$conn->close();
?>
