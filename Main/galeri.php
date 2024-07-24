<?php
require '../connection.php'; // Adjust path to your database connection script


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Galeri Amansa</title>
  <link rel="stylesheet" type="text/css" href="css/galeri.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/tentang.css" />

</head>

<style>
  .gallery-title {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    text-align: left;
    font-size: 2em;
    font-weight: bold;
    color: #fff;
    z-index: 3;
    /* background: rgba(0, 0, 0, 0.5); */
    padding: 10px 20px;
    border-radius: 10px;
    width: 100%;
    color: #0D3C63;
    /* text-align: center; */
  }

  .parallax-1 {
    background-image: url("assets/galeri.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin-bottom: 4%;
  }

  #whatsapp-widget-icon {
    width: 50px;
}
</style>

<body>

  <?php include 'navbarAmansa.php'; ?>
  <div>
    <div>
      <div class="parallax-1">
        <div class="parallax-inner">

          <h1 style="font-family: Spinnaker; font-size: 35px; font-weight: bold;">Umrah bersama Amansa</h1>
          <h2 style="font-family: Spinnaker; font-size: 35px; font-weight: bold;"><em>Special Spiritual Moment to Baitullah</em></h2>
        </div>
      </div>



      <div class="row justify-content-center">

<!-- <p style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 30px;">Kesan Bersama Amansa</p> -->

<div class="col-3" style="text-align: left; color: white;width:75%; padding: 10px; margin: 10px; background: none; text-align: left; border: 0px solid black; border-radius: 8px; background-color: #0D3C63;font-weight: bold;">
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM badal WHERE id = 2"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td></td>
                <a style=""><?php echo $row["deskripsi"]; ?></a><br><br>
            </td>
            <div class="">

            </div>
        </tr>
        
    <?php endforeach; ?>
    

</div>
<br><br>
</div>





</div>


      <!-- Fetching and displaying images from multiple gallery IDs -->
      <?php
      $galleryIds = [1, 2, 3]; // Array of gallery IDs to fetch

      foreach ($galleryIds as $galleryId) {
        $result = mysqli_query($conn, "SELECT * FROM galeri WHERE id = $galleryId");

        if (mysqli_num_rows($result) > 0) {
          $gallery = mysqli_fetch_assoc($result);
      ?>
 <div class="slider">
  <div class="gallery-title"><h4><?php echo htmlspecialchars($gallery['name']); ?></h4></div>
  <div class="slide-track">
    <?php for ($i = 1; $i <= 7; $i++) :
      $imageField = 'image' . $i;
      if (!empty($gallery[$imageField])) :
    ?>
      <div class="slide"><img src="<?php echo htmlspecialchars('../Admin/img/' . $gallery[$imageField]); ?>" alt="Gallery Image <?php echo $i; ?>"></div>
    <?php
      endif;
    endfor;
    ?>
    <!-- Duplicate the images for seamless scrolling -->
    <?php for ($i = 1; $i <= 7; $i++) :
      $imageField = 'image' . $i;
      if (!empty($gallery[$imageField])) :
    ?>
      <div class="slide"><img src="<?php echo htmlspecialchars('../Admin/img/' . $gallery[$imageField]); ?>" alt="Gallery Image <?php echo $i; ?>"></div>
    <?php
      endif;
    endfor;
    ?>
  </div>
</div>



      <?php
        } else {
          echo "<p>No gallery found for ID $galleryId.</p>";
        }
      }

      // Close database connection
      mysqli_close($conn);
      ?>

    </div>
    </div>
    

    <script src="js/script.js"></script>


    <section class="achievementss">
    <br><br><br><br><br>

    </div>
  </section>

    <?php include 'footerAmansa.php'; ?>

</body>

</html>