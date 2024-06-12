<?php
require '../connection.php';

// Check if image ID is provided in URL parameter
if(isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from the database
    $sql = "SELECT * FROM haji WHERE id = " . $image_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive Navbar</title>
    <link rel="stylesheet" type="text/css" target="_blank" href="css/paketUmroh.css" />
  </head>
  <body>
    <nav>
      <div class="logo">
        <img src="assets/logoHorizon.png" alt="logo" />
      </div>
      <ul>
        <li>
          <a href="#">Beranda</a>
        </li>
        <li>
          <a href="#">Tentang Amansa</a>
        </li>
        <li>
          <a href="Umroh.php">Umroh</a>
        </li>
        <li>
          <a href="Haji.php">Haji</a>
        </li>
        <li>
          <a href="#">Badal</a>
        </li>
        <li>
          <a href="#">Kemitraan</a>
        </li>
        <li>
          <a href="#">Galeri & Artikel</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </nav>
    <div class="menubar">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Blog</a>
        </li>
        <li>
          <a href="#">Contact Us</a>
        </li>
      </ul>
    </div>


  <div class="containerUmroh">
    <?php if(isset($row)): ?>
      <div class="namaPaket">
            <h1></strong> <?php echo $row['nama']; ?></h1>
      </div>

      <div class="containerGambarPaket">
      <div class="gambarPaket">
             <img src="../Admin/img/<?php echo $row['image']; ?>"  alt="">
      </div>
      </div>
           
            <div class="containerDeskripsi">
                <div class="deskripsi">
                    <p> <?php echo $row['deskripsi']; ?></p>
                </div>

                <div class="itenary">
                    <h1>&nbsp;Itenary</h1>
                    <ul class="list">
                        <li><span><?php echo $row["itenary1"]; ?></span></li>
                        <li><span><?php echo $row["itenary2"]; ?></span></li>
                        <li><span><?php echo $row["itenary3"]; ?></span></li>
                        <li><span><?php echo $row["itenary4"]; ?></span></li>
                    </ul>
                </div>
            
        <?php else: ?>
            <p>No data found for the provided ID.</p>
        <?php endif; ?>
        </div>
        </div>

        <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h2>Contact Us</h2>
          <p>Email: info@example.com</p>
          <p>Phone: +123 456 7890</p>
        </div>
        <div class="footer-section">
          <h2>Follow Us</h2>
          <a href="#"><img src="assets/facebook-icon.png" alt="Facebook"></a>
          <a href="#"><img src="assets/twitter-icon.png" alt="Twitter"></a>
          <a href="#"><img src="assets/instagram-icon.png" alt="Instagram"></a>
        </div>
        <div class="footer-section">
          <h2>Address</h2>
          <p>1234 Street Name, City, Country</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Amansa Umroh. All rights reserved.</p>
      </div>
    </footer>



    

    <script src="js/script.js"></script>
  </body>
</html>
