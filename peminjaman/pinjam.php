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
    $check_stock_sql = "SELECT stok FROM buku WHERE id = $book_id";
    $result = $conn->query($check_stock_sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_stock = $row['stok'];

        if ($current_stock > 0) {
            // Decrement the book stock
            $update_stock_sql = "UPDATE buku SET stok = stok - 1 WHERE id = $book_id";
            $update_result = $conn->query($update_stock_sql);

            if ($update_result) 
            {
                // Insert the borrowed book into the borrowed_books table (assuming user_id as 1, replace with your user ID logic)
                $user_id = $_SESSION['user_id']; // Replace this with your actual user ID logic

                $insert_borrow_sql = "INSERT INTO pinjam_buku (user_id, book_id, returned) VALUES ($user_id, $book_id, 0)";
                if ($conn->query($insert_borrow_sql) === TRUE) {
                    echo "Book borrowed successfully!";
                } else 
                {
                    echo "Error borrowing book: " . $conn->error;
                }
            } 
            else 
            
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
