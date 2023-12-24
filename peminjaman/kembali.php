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
    include 'koneksi.php';


    // Update the status of the returned book in borrowed_books table
    $user_id = $_SESSION['user_id']; // Replace this with your actual user ID logic

    $sql = "UPDATE pinjam_buku SET returned = 1 WHERE user_id = $user_id AND book_id = $book_id AND returned = 0 LIMIT 1";

    $return_result = $conn->query($sql);

    if ($return_result && $conn->affected_rows > 0) {
        
        $update_stok_sql = "UPDATE buku SET stok = stok + 1 WHERE id = $book_id";

        $update_stok_result = $conn->query($update_stok_sql);

        if ($update_stok_result) {
            echo "Book Dikembalikan";
            header("Location: pinjam_lihat.php");
        } 
        
        else 
        {
            echo "Error updating book stock: " . $conn->error;
        }
    } elseif ($return_result && $conn->affected_rows === 0) {
        echo "Book already returned or not borrowed by the user";
    } else 
    {
        echo "Error returning book: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid book selection";
}
