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
  .parallax-inner {
    padding: 20% 0;
  }


  .h1,
  h1 {
    color: #EEBE48;
  }

  .button33 {
    border-color: aquamarine;
  }



  .parallax-1 {
    background-image: url("assets/haji.png");

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

  <div>
    <div class="parallax-1">
      <div class="parallax-inner">
        <h1>Haji Bersama Amansa</h1>
        <h2>Special Spiritual Moment to Baitullah</h2>
      </div>
    </div>
  </div>

  <div class="containerUmroh ">
    <!-- <h1>Layanan Haji Kami</h1> -->
    <div class="containerPaketUmroh row justify-content-center">
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 1"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>

            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>



      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 2"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 3"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 4"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 5"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>

      <div class="paketUmroh">
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM haji WHERE id = 6"); ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>
              <!-- <h1><?php echo $row["nama"]; ?></h1> -->
            </td>
            <div class="containerCoverUmroh">
              <td><img src="../Admin/img/<?php echo $row['cover']; ?>" alt=""></td>
            </div>
            <?php
            echo
            "<td><a href='paketHaji.php?id=" . $row['id'] . "' class='button33'>Selengkapnya</a> </td>" ?>
          </tr>
        <?php endforeach; ?>
      </div>
      <br>
    </div>
  </div>




  <script src="js/script.js"></script>
  <?php include 'footerAmansa.php'; ?>
</body>

</html>