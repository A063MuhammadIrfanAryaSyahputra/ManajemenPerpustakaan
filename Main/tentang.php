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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/tentang.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />



</head>

<style>
  .parallax-inner {
    padding: 20% 0;
  }

  .h1,
  h1 {
    color: #0D3C63;
  }

  .button33 {
    border-color: aquamarine;
  }

  .parallax-1 {
    background-image: url("assets/tentang.png");

    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin-bottom: 4%;
  }


  .paketUmroh {
    height: 550px;
    /* background-color: rgb(255, 20, 12); */
    padding: 1em;
    font-weight: 700;
    color: black;
    text-align: center;
    /* border: 10px solid rgb(24, 24, 24); */
    border-radius: 10px;
    width: 350px;

  }
</style>

<body>


  <?php include 'navbarAmansa.php'; ?>

  <div class="parallax-1">
        <div class="parallax-inner">

          <h1 style="font-family: trocchi; font-size: 35px;">Umrah bersama Amansa</h1>
          <h2 style="font-family: trocchi; font-size: 35px;"><em>Special Spiritual Moment to Baitullah</em></h2>
        </div>
      </div>

  <section class="achievements">
    <h2>Our Achievements</h2>
    <div class="achievement-stats">

    </div>
    <div class="achievement-list">
      <div class="achievement-item">
        <img src="assets/tentang1.png" alt="Icon">
        <p>Bimbingan Sesuai Sunnah</p>
      </div>
      <div class="achievement-item">
        <img src="assets/tentang2.png" alt="Icon">
        <p>Terdaftar Siskopatuh</p>
      </div>
      <br>
      <div class="achievement-item">
        <img src="assets/tentang3.png" alt="Icon">
        <p>Ijin Umroh Resmi</p>
      </div>
      <div class="achievement-item">
        <img src="assets/tentang4.png" alt="Icon">
        <p>Terbaik dalam layanan</p>
      </div>
    </div>
  </section>

  <section class="achievements">
    <h2>Our Achievements</h2>
    <div class="achievement-stats">

    </div>
    <div class="achievement-list">
      <div class="achievement-item">
      <img src="assets/BankSyariah.png" alt="Suriyah Logo">
        <p>Bimbingan Sesuai Sunnah</p>
      </div>
      <div class="achievement-item">
      <img src="assets/bankMuammalat.png" alt="Muamalat Logo">
        <p>Terdaftar Siskopatuh</p>
      </div>
      <br>
      <div class="achievement-item">
      <img src="assets/bankJateng.png" alt="Jateng Logo">
        <p>Ijin Umroh Resmi</p>
      </div>

    </div>
  </section>

<!-- 
  <section class="support">
    <h2>Support By</h2>
    <div class="support-logos">
      <img src="assets/BankSyariah.png" alt="Suriyah Logo">
      <img src="assets/bankMuammalat.png" alt="Muamalat Logo">
      <img src="assets/bankJateng.png" alt="Jateng Logo">
    </div>
  </section> -->




  <?php include 'footerTentang.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>