<?php
require('fpdf186/fpdf.php'); // Include FPDF

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', '', 12);

// Title
$pdf->Cell(0, 10, 'Peminjam Buku', 0, 1, 'C');
$pdf->Ln(5); // Add some space

// Table headers
$pdf->Cell(45, 10, 'Judul Buku', 1);
$pdf->Cell(45, 10, 'Pengarang', 1);
$pdf->Cell(45, 10, 'Peminjam', 1);
$pdf->Cell(45, 10, 'Tanggal', 1);
$pdf->Ln(); // Move to the next line

// Database connection
$conn = new mysqli("localhost", "root", "", "perpus1"); // Update with your database credentials

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT buku.judul_buku, buku.pengarang_buku, user.username, pinjam_buku.date2
        FROM pinjam_buku 
        INNER JOIN buku ON pinjam_buku.book_id = buku.id 
        INNER JOIN user ON pinjam_buku.user_id = user.user_id 
        WHERE pinjam_buku.returned = 0";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(45, 10, $row["judul_buku"], 1);
        $pdf->Cell(45, 10, $row["pengarang_buku"], 1);
        $pdf->Cell(45, 10, $row["username"], 1);
        $pdf->Cell(45, 10, $row["date2"], 1);
        $pdf->Ln(); // Move to the next line
    }
} else {
    $pdf->Cell(0, 10, 'Tidak Ada Peminjam Buku.', 1, 1); // Display a message if no data found
}

$conn->close();

// Output the PDF
$pdf->Output();
