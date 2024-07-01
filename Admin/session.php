<?php
  session_start();

  // Check if the user is logged in, if not redirect to login page
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo '<script>alert("Silahkan Login Dahulu!")</script>'; 
      header("Location: ../../loginPage/");
      exit;
  }

  // Display secure content here
?>