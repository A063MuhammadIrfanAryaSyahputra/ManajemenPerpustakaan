<?php
require '../connection.php'; // Adjust path to your database connection script


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Responsive Navbar</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/galeri.css" />
</head>

<body>

  <?php include 'navbarAmansa.php'; ?>

  <div>
    <div class="parallax-1">
      <div class="parallax-inner">
        <h1>Haji Bersama Amansa</h1>
        <h2>Special Spiritual Moment to Baitullah</h2>
      </div>
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
        <div class="gallery-title"><?php echo htmlspecialchars($gallery['name']); ?></div>
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


  <?php include 'footerAmansa.php'; ?>

  <script src="js/script.js"></script>
</body>

</html>