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
        <h1>Umroh bersama Amansa</h1>
        <h2>Special Spiritual Moment to Baitullah</h2>
      </div>
    </div>
  </div>

  <div class="containerUmroh">
    <h1>Layanan umroh Kami</h1>
    <div class="containerPaketUmroh">
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 5"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 6"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 7"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 8"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 9"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM umroh WHERE id = 10"); ?>
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
            "<br><td><a href='paketUmroh.php?id=" . $row['id'] . "' class='button33'>Lihat Selengkapnya</a> </td>" ?>
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