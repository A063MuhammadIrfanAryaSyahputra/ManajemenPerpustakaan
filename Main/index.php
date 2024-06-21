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
  </div>

  <div class="containerUmroh">
    <br>
    <h1>Why Amansa</h1>
    <div class="containerPaketUmroh">
      <!-- <div class="paketUmroh"> -->
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 1"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh"> <!-- This class is for bentuk bracket -->
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>

      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 2"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>

      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 3"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>

      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 4"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 5"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM home WHERE id = 6"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <h1><?php echo $row["nama"]; ?></h1>
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<br><td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <br>
    </div>
  </div>
  <?php include 'footerAmansa.php'; ?>


  <script src="js/script.js"></script>
</body>

</html>