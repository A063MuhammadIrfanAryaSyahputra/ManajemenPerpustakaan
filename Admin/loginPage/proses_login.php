<?php
session_start();

include '../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id_user, username, password FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Save session
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            // Redirect to dashboard
            header("Location: ../menuGambar/homePage/homePage.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['error_message'] = "Password Salah";
            header("Location: index.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error_message'] = "User Tidak Ditemukan";
        header("Location: index.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
