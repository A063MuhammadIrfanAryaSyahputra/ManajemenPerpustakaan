<?php
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive Navbar</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css" />
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
          <a href="#">Haji</a>
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


    <div>
    <div class="parallax-1">
      <div class="parallax-inner">
        <h1>Haji Bersama Amansa</h1>
        <h2>Special Spiritual Moment to Baitullah</h2>
      </div>
    </div>
 </div>

  <div class="containerUmroh">
    <h1>Layanan Haji Kami</h1>
    <div class="containerPaketUmroh">
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 1"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 2"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 3"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 4"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 5"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
      <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 6"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><h1><?php echo $row["nama"]; ?></h1></td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>"  alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>"?>
        </tr>
    <?php endforeach; ?>
      </div>
      <br>
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
