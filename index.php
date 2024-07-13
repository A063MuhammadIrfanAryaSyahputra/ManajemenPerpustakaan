<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Amansa Tours And Travel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="Main/css/style.css" />
  <link rel="stylesheet" type="text/css" href="Main/css/navbar.css" />

  <script src="https://kit.fontawesome.com/b137604a47.js" crossorigin="anonymous"></script>

</head>

<style>
  /* warna warna bg section */
  .section1 {
    width: 100%;
    margin: auto;
    height: auto;
    align-items: center;
    text-align: center;
  }

  .section2 {
    width: 100%;
    margin: auto;
    height: auto;
    align-items: center;
    text-align: center;
    background-color: #EEBE48;
  }


  .section3 {
    width: 100%;
    margin: auto;
    height: auto;
    align-items: center;
    text-align: center;
    background-color: #FFDF7B;
  }

  .parallax-1 {
    background-image: url("Main/assets/blur.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin-bottom: 0%;
    padding: 10%;
  }
</style>

<body>

  <?php include 'navbarAmansa.php'; ?>



  <!-- <div> -->
  <div class="parallax-1">
    <div class="parallax-inner">
      <div class="container">
        <div class="row" style="align-items: center !important;">

          <div class="col-md-4 ">
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1");
            foreach ($rows as $row) :
            ?>

            <?php endforeach; ?>

            <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" style="max-width: 60%; height: auto; margin: 0 auto;">

          </div>
          <div class="col-md-8" style="text-align:justify">
            <!-- <h2>Description</h2> -->
            <a style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: justify; color: white;  line-height: 0;"><?php echo $row["deskripsi"]; ?></a><br><br>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="containerHome section1">
    <br><br><br>

    <h1 style="color: #0D3C63;">Mengapa Amansa</h1>
    <br><br><br>

    <div class="">
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 4");
      foreach ($rows as $row) :
      ?>
        <div class="whyAmansaContent">

          <div class="containerCoverDotIcon">
            <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

          </div>
        </div>
      <?php endforeach; ?>
    </div><br><br>

    <div class="">

      <?php
      $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 5");
      foreach ($rows as $row) :
      ?>

        <div class="whyAmansaContent">

          <div class="containerCoverDotIcon">
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <br>
  <br>


  <!-- Carousel Testimoni -->
  <div class="containerHome section3">
    <br>
    <div class="row justify-content-center testimonial-container">
      <p class="testimonial-title" style="color: #0D3C63; font-weight: bolder;">Kesan Bersama Amansa</p>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row">
              <div class="col-12 col-md-3">
                <div class="testimonial-content">
                  <!-- <img src="Main/assets/testi1.png" alt="Testimonial 1"> -->

                  <?php
                  $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 5");
                  foreach ($rows as $row) :
                  ?>
                    <div class="whyAmansaContent">

                      <div class="containerCoverDotIcon">
                        <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

                      </div>
                    </div>
                  <?php endforeach; ?>

                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="testimonial-content">
                  <!-- <img src="Main/assets/testi1.png" alt="Testimonial 2"> -->
                  <?php
                  $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 6");
                  foreach ($rows as $row) :
                  ?>
                    <div class="whyAmansaContent">

                      <div class="containerCoverDotIcon">
                        <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="testimonial-content">
                  <!-- <img src="Main/assets/testi1.png" alt="Testimonial 3"> -->
                  <?php
                  $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 7");
                  foreach ($rows as $row) :
                  ?>
                    <div class="whyAmansaContent">

                      <div class="containerCoverDotIcon">
                        <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="testimonial-content">
                  <!-- <img src="Main/assets/testi1.png" alt="Testimonial 4"> -->
                  <?php
                  $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 8");
                  foreach ($rows as $row) :
                  ?>
                    <div class="whyAmansaContent">

                      <div class="containerCoverDotIcon">
                        <img src="Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>

        </div>



      </div>
    </div>
    <br><br>
  </div>

  <!-- End Carousel Testimoni -->



  <!-- Instagram Feed -->
  <div class="containerInstagram section4">
    <br>
    <div class="row justify-content-center" style="margin-right: 0px; margin-left: 0px;">
      <p style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 30px;color: #0D3C63;
    "><i class="fa-brands fa-instagram"></i> amansaumroh</p>
      <div class="instagram-grid">
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C2Ow77Cp0Mr/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig1.jpg" alt="Instagram Image 1">
          </a>
        </div>
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C6IOUe7ppYs/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig2.jpg" alt="Instagram Image 2">
          </a>
        </div>
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C71bo7bJZFd/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig3.jpg" alt="Instagram Image 3">
          </a>
        </div>
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C8tmwGCJk1z/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig4.jpg" alt="Instagram Image 4">
          </a>
        </div>
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C89G-FoJNON/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig5.jpg" alt="Instagram Image 5">
          </a>
        </div>
        <div class="instagram-item">
          <a href="https://www.instagram.com/p/C9EOujVpWwR/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
            <img src="Main/assets/ig6.jpg" alt="Instagram Image 6">
          </a>
        </div>
      </div>
    </div>
    <br><br>
  </div>
  <!-- End Instagram Feed -->




  </div>

  <!-- footer -->
  <?php include 'footerindex.php'; ?>
  <script src="Main/js/script.js"></script>
</body>

</html>