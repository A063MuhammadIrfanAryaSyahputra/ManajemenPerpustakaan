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
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/kemitraan.css" />

</head>

<style>
  .parallax-inner {
    padding: 20% 0;
  }


  .h1,
  h1 {
    color: #0D3C63;
  }

  .button33{
    border-color: aquamarine;
  }



  .parallax-1 {
    background-image: url("assets/koutubial.jpg");

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



  <main>
        <section class="mitra-banner">
            <div class="mitra-card">
                <img src="assets/kemitraan1.png"" alt="Mitra Image 1">
            </div>
            <div class="mitra-card">
                <img src="assets/kemitraan2.png" alt="Mitra Image 2">
        </section>
        <section class="mitra-info">
            <h2>amansaumroh</h2>
            <h3>Pendaftaran Mitra Amansa Batch 2</h3>
            <p>Menjadi agen kebaikan adalah suatu pilihan yang harus kita tunaikan. Sebab ada keutamaan yang akan kita dapatkan..</p>
            <p>Salah satu diantara kebaikan itu adalah merekomendasikan Travel Haji dan Umroh yang sesuai Sunnah & Tuntunan Nabi kepada setiap insan yang memiliki keinginan beribadah ke tanah suci</p>
            <p>Selain dapat pahala kebaikan, anda juga akan dapat banyak benefitnya.</p>
            <p>Berniat bergabung menjadi Mitra dan Agen Kebaikan Amansa? segera daftar dan raih keuntungannya sekarang</p>
        </section>
    </main>

  


  <?php include 'footerAmansa.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>