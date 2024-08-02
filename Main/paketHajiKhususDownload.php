<?php
require '../connection.php';
require 'fpdf/fpdf.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if image ID is provided in URL parameter
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from the database
    $sql = "SELECT * FROM hajiKhusus WHERE id = " . $image_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die('No data found for the provided ID.');
    }
} else {
    die('No ID provided.');
}

class PDF extends FPDF
{
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 10, 'Paket Haji', 0, 1, 'C');
        // Line break
        $this->Ln(20);
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Nama Paket
$pdf->Cell(0, 10, $row['nama'], 0, 1, 'C');

// Gambar Paket
$pdf->Image('../Admin/img/' . $row['image'], 10, 30, 190);

// Line break setelah gambar
$pdf->Ln(220);

// Itenary
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Detail Paket', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, $row['itenary1'], 0, 1);
$pdf->Cell(0, 10, $row['itenary2'], 0, 1);
$pdf->Cell(0, 10, $row['itenary3'], 0, 1);
$pdf->Cell(0, 10, $row['itenary4'], 0, 1);

// Line break
$pdf->Ln(10);

// Deskripsi
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Deskripsi Paket', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, $row['deskripsi']);

$pdf->Output('D', 'Paket ' . $row['nama'] . '.pdf');

?>
