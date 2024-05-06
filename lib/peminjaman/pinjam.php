<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    include 'koneksi.php';

    // Check book availability before borrowing
    $check_stock_sql = "SELECT stok FROM buku WHERE id = ?";
    $stmt = $conn->prepare($check_stock_sql);
    $stmt->bind_param("i", $book_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_stock = $row['stok'];

        if ($current_stock > 0) {
            // Decrement the book stock
            $update_stock_sql = "UPDATE buku SET stok = stok - 1 WHERE id = ?";
            $stmt = $conn->prepare($update_stock_sql);
            $stmt->bind_param("i", $book_id);
            $update_result = $stmt->execute();

            if ($update_result) {
                // Insert the borrowed book into the borrowed_books table
                $user_id = $_SESSION['user_id'];

                $insert_borrow_sql = "INSERT INTO pinjam_buku (user_id, book_id, returned) VALUES (?, ?, 0)";// Prepare the SQL statement
                $stmt = $conn->prepare($insert_borrow_sql);// Prepare the SQL statement
                $stmt->bind_param("ii", $user_id, $book_id);// Bind the user ID and book ID
                $stmt->execute(); // Execute the prepared query

                header("Location: index.php");
                exit();
            } else 
            {
                echo "Error updating book stock: " . $conn->error;
            }
        } else {
            echo "Book out of stock";
        }
    } else {
        echo "Book not found";
    }

    $conn->close();
} else {
    echo "Invalid book selection";
}
?>
