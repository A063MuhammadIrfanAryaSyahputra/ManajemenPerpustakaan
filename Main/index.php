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
  background-image: url("assets/blur.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  margin-bottom: 0%;
  padding: 10%;
}

.testimonial-content img {
  width: 100%;
  max-width: 200px; /* Adjust this value to make the images smaller */
  height: auto;
  display: block;
  margin: 0 auto;
  border: 1px solid black;
  border-radius: 8px;

  @media (max-width: 768px) {
    .parallax-1 {
      background-attachment: scroll;
    }

    .testimonial-content img {
      max-width: 150px;
    }
  }
}
</style>

<body>

  <?php include 'navbarAmansa.php'; ?>



  <!-- <div> -->
  <div class="parallax-1">
    <div class="parallax-inner">
      <div class="container">
        <div class="row" style="align-items: center !important;">

          <div class="col-md-4 " >
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1");
            foreach ($rows as $row) :
            ?>

            <?php endforeach; ?>

            <!-- <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" alt="Slide 1" style="max-width: 80%; height: auto;"> -->
            <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" style="max-width: 60%; height: auto; margin: 0 auto;">

            <!-- <img src="path/to/image.jpg" alt="Image" class="img-fluid"> -->
          </div>
          <div class="col-md-8" style="text-align:justify">
            <!-- <h2>Description</h2> -->
            <a style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: justify; color: white;  line-height: 0;"><?php echo $row["deskripsi"]; ?></a><br><br>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- </div> -->


  <!-- <div>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">

        <div class="">
          <?php
          $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1");
          foreach ($rows as $row) :
          ?>
            <div class="whyAmansaContent">

              <div class="containerCoverDotIcon">


              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="carousel-item active c-item">
          <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" alt="Slide 1">
          <div class="carousel-caption top-0 mt-4">


          </div>

          <div class="">
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 2");
            foreach ($rows as $row) :
            ?>
              <div class="whyAmansaContent">

                <div class="containerCoverDotIcon">


                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
        <div class="carousel-item c-item">
          <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" alt="Slide 2">
          <div class="carousel-caption top-0 mt-4">


          </div>

          <div class="">
            <?php
            $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 3");
            foreach ($rows as $row) :
            ?>
              <div class="whyAmansaContent">

                <div class="containerCoverDotIcon">


                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
        <div class="carousel-item c-item">
          <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-0 mt-4">

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div> -->

  <div class="containerHome section1">
    <br><br><br>

    <h1>Mengapa Amansa</h1>
    <br><br><br>

    <div class="">
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 4");
      foreach ($rows as $row) :
      ?>
        <div class="whyAmansaContent">

          <div class="containerCoverDotIcon">
            <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">

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
            <!-- <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image"> -->
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <!-- <div class="containerHome ">




    <div class="whyAmansaContent">
      <div class="containerCoverDotIcon">

        <iframe width="100%" height="540" src="https://www.youtube.com/embed/<?php echo $row['deskripsi']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </div>
  </div> -->
  <br>
  <br>

  <div class="containerHome section3">
    <br>
    <div class="row justify-content-center" style="margin-right: 0px; margin-left: 0px;">
      <p style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 30px;">Kesan Bersama Amansa</p>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="testimonial-content">
                  <img src="https://marketplace.canva.com/EAFvCLo1gPg/1/0/900w/canva-krem-%26-putih-minimalis-testimonial-cerita-instagram-sGI_LpwQ8-Y.jpg" alt="Placeholder Image">
                </div>
              </div>
            </div>
          </div>
          <!-- Add more carousel-item divs here if you have more testimonials -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br><br>
  </div>



    <br><br>




  </div>


  </div>

  <!-- footer -->
  <?php include 'footerAmansa.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>