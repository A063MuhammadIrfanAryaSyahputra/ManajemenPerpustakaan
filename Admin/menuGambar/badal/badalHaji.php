<?php
require '../../../connection.php';
include '../../session.php';


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $deskripsi = $_POST["deskripsi"];
    $itenary1 = $_POST["itenary1"];
    $itenary2 = $_POST["itenary2"];
    $itenary3 = $_POST["itenary3"];
    $itenary4 = $_POST["itenary4"];

    // Handle the first image upload
    if ($_FILES["image"]["error"] === 4) {
        echo "<script>alert('First image does not exist');</script>";
    } elseif ($_FILES["cover"]["error"] === 4) {
        echo "<script>alert('Second image does not exist');</script>";
    } else {
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $second_filename = $_FILES["cover"]["name"];
        $second_filesize = $_FILES["cover"]["size"];
        $second_tmpName = $_FILES["cover"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));

        $second_imageExtension = explode('.', $second_filename);
        $second_imageExtension = strtolower(end($second_imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script>alert('Invalid first image extension');</script>";
        } elseif (!in_array($second_imageExtension, $validImageExtension)) {
            echo "<script>alert('Invalid second image extension');</script>";
        } elseif ($filesize > 1000000) {
            echo "<script>alert('First image size is too large');</script>";
        } elseif ($second_filesize > 1000000) {
            echo "<script>alert('Second image size is too large');</script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            $newSecondImageName = uniqid() . '.' . $second_imageExtension;

            move_uploaded_file($tmpName, '../../img/' . $newImageName);
            move_uploaded_file($second_tmpName, '../../img/' . $newSecondImageName);

            $query = "INSERT INTO home VALUES ('', '$name', '$newImageName', '$newSecondImageName', '$deskripsi', '$itenary1', '$itenary2', '$itenary3', '$itenary4')";
            mysqli_query($conn, $query);
            echo
            "<script> 
            alert('Succesfully added'); 
            document.location.href = 'paketHaji.php';
            </script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar" class="js-sidebar">
        <!-- Content For Sidebar -->
        <div class="h-100">
          <!-- <div class="sidebar-logo">
            <a href="../../../Main/Umroh.php">Amansa Travel</a>
          </div> -->
          <!-- sidebar -->
          <?php include '../sidebarMenuGambar.php'; ?>

        </div>
      </aside>
      
      <div class="main">

        <!-- sideprofilef here -->

        <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="mb-3">
              <h4>List Gambar Badal</h4>
            </div>

            <!-- Table Element -->
            <div class="card border-0">
              <div class="card-header">
                <h5 class="card-title">Paket Badal</h5>
                <h6 class="card-subtitle text-muted">Dibawah ini adalah list gambar yang ada pada menu paket home</h6>
              </div>
              <div class="card-body">
                <table class="table">
                <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
        <td>Cover</td>
        <td>Deskripsi</td>
        <!-- <td>Itenary 1</td>
        <td>Itenary 2</td>
        <td>Itenary 3</td>
        <td>Itenary 4</td> -->
        <td>Action</td>
    </tr>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM badal ORDER BY id ASC"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><img src="../../img/<?php echo $row['image']; ?>" width="200"  alt=""> </td>
            <td><img src="../../img/<?php echo $row['cover']; ?>" width="200"  alt=""> </td>
            <td><?php echo $row["deskripsi"]; ?></td>

            <!-- <td><?php echo $row["itenary1"]; ?></td> -->
            <!-- <td><?php echo $row["itenary2"]; ?></td> -->
            <!-- <td><?php echo $row["itenary3"]; ?></td> -->
            <!-- <td><?php echo $row["itenary4"]; ?></td> -->
            <?php
            echo
            "<td><a href='editBadal.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm mr-1'>Edit</a> </td>"?>
        </tr>
    <?php endforeach; ?> <!-- Closing the foreach loop -->
</table>

<a href="../../../index.php">Balik</a>
                </table>
              </div>
            </div>
          </div>
          <!--End List Gambar-->
        </main>
        <a href="#" class="theme-toggle">
          <i class="fa-regular fa-moon"></i>
          <i class="fa-regular fa-sun"></i>
        </a>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <p class="mb-0">
                  <a href="#" class="text-muted">
                    <strong>Umenk</strong>
                  </a>
                </p>
              </div>
              <div class="col-6 text-end">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">About Us</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Terms</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted">Booking</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
