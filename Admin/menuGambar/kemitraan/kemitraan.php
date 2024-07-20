<?php
require '../../../connection.php';
include '../../session.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Kemitraan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar" class="js-sidebar">
        <!-- Content For Sidebar -->
        <div class="h-100">
          <?php include '../sidebarMenuGambar.php'; ?>

        </div>
      </aside>
      
      <div class="main">

        <!-- sideprofilef here -->

        <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="mb-3">
              <h4>List Gambar Kemitraan</h4>
            </div>

            <!-- Table Element -->
            <div class="card border-0">
              <div class="card-header">
                <h5 class="card-title">Kemitraan</h5>
                <h6 class="card-subtitle text-muted">Dibawah ini adalah list gambar yang ada pada menu Kemitraan</h6>
              </div>
              <div class="card-body">
                <table class="table">
                <tr>
        <td>#</td>
        <td>Name</td>
        <td>Gambar 1</td>
        <td>Gambar 2</td>
        <td>Deskripsi</td>
        <td>Action</td>
    </tr>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM kemitraan ORDER BY id ASC"); ?>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><img src="../../img/<?php echo $row['image']; ?>" width="200"  alt=""> </td>
            <td><img src="../../img/<?php echo $row['cover']; ?>" width="200"  alt=""> </td>
            <td><?php echo $row["deskripsi"]; ?></td>
            <?php
            echo
            "<td><a href='editKemitraan.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm mr-1'>Edit</a> </td>"?>
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
