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

<body>


  <?php include 'navbarAmansa.php'; ?>



  <div>
    <div class="parallax-1">
      <div class="parallax-inner">
        <!-- Carousel goes here -->
        <h1>Caarrousel</h1>
        <!-- <h2>Special Spiritual Moment to Baitullah</h2> -->
      </div>
    </div>
  </div>


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
            <h2><?php echo $row["nama"]; ?></h2>
            <div class="containerCoverDotIcon">

              <h2><?php echo $row["nama"]; ?></h2>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="carousel-item active c-item">
      <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-4">


        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="https://persadaindonesia.com/wp-content/uploads/2023/06/Frame-418-1536x539.webp" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">


        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="https://persadaindonesia.com/wp-content/uploads/2023/06/Frame-418-1536x539.webp" class="d-block w-100 c-img" alt="Slide 3">
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

  <div class="containerUmroh">
    <br>
    <h1>Why Amansa</h1>

    <div class="">
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1");
      foreach ($rows as $row) :
      ?>
        <div class="whyAmansaContent">
          <h2><?php echo $row["nama"]; ?></h2>
          <div class="containerCoverDotIcon">
            <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">
            <h2><?php echo $row["nama"]; ?></h2>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="">
      <?php
      $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1");
      foreach ($rows as $row) :
      ?>
        <div class="whyAmansaContent">
          <h2><?php echo $row["nama"]; ?></h2>
          <div class="containerCoverDotIcon">
            <img src="../Admin/img/<?php echo $row['cover']; ?>" alt="Cover Image">
            <h2><?php echo $row["nama"]; ?></h2>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <br>
  </div>

  <?php include 'footerAmansa.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>