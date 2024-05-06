<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if book ID is provided
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpus1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the borrowed book into the borrowed_books table (assuming user_id as 1, replace with your user ID logic)
    $user_id = $_SESSION['user_id']; // Replace this with your actual user ID logic


    $sql = "INSERT INTO pinjam_buku (user_id, book_id) VALUES ($user_id, $book_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Book borrowed successfully!";
    } else {
        echo "Error borrowing book: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid book selection";
}
