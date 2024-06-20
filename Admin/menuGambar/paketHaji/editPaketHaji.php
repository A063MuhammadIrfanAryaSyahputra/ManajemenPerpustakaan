<?php
require '../../../connection.php';

// Check if image ID is provided in URL parameter
if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    // Fetch image details from the database
    $sql = "SELECT * FROM haji WHERE id = " . $image_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
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
          <div class="sidebar-logo">
            <a href="../../../Main/homepage.php">Amansa Travel</a>
          </div>
          <!-- <ul class="sidebar-nav">
            <li class="sidebar-header">Admin Elements</li>
            <li class="sidebar-item">
              <a href="index.html" class="sidebar-link">
                <i class="fa-solid fa-list pe-2"></i>
                Dashboard
              </a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"
                ><i class="fa-solid fa-file-lines pe-2"></i>
                List Gambar
              </a>
              <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Home Page</a>
                </li>
                <li class="sidebar-item">
                  <a href="../paketUmroh/paketUmroh.php" class="sidebar-link">Paket Umroh</a>
                </li>
                <li class="sidebar-item">
                  <a href="paketHaji.php" class="sidebar-link">Paket Haji</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false"
                ><i class="fa-regular fa-user pe-2"></i>
                Auth
              </a>
              <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Register</a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">Forgot Password</a>
                </li>
              </ul>
            </li>
          </ul> -->
          <?php include '../sidebarMenuGambar.php'; ?>


        </div>
      </aside>
      <div class="main">
        <nav class="navbar navbar-expand px-3 border-bottom">
          <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                  <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="#" class="dropdown-item">Profile</a>
                  <a href="#" class="dropdown-item">Setting</a>
                  <a href="#" class="dropdown-item">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <main class="content px-3 py-2">
          <div class="container-fluid">
            <div class="mb-3">
              <h4>Tambah Data</h4>
            </div>

            <!-- Table Element -->
            <div class="card border-0">
              <div class="card-header">
                <h5 class="card-title">Tambah Data</h5>
                <h6 class="card-subtitle text-muted">Tambah Data Paket Umroh Dibawah ini</h6>
              </div>
              <div class="card-body">
                <h2 class="mb-3">Edit Image</h2>
                <form action="updatePaketHaji.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Current Image:</label>
                        <br>
                        <img src="../../img/<?php echo $row['image']; ?>" width="200" alt="">
                    </div>
                    <div class="form-group">
                        <label for="second_image">Current Second Image:</label>
                        <br>
                        <img src="../../img/<?php echo $row['cover']; ?>" width="200" alt="">
                    </div>
                    <div class="form-group">
                        <label for="name">Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Itenary 1:</label>
                        <input type="text" class="form-control" id="itenary1" name="itenary1" value="<?php echo $row['itenary1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Itenary 2:</label>
                        <input type="text" class="form-control" id="itenary2" name="itenary2" value="<?php echo $row['itenary2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Itenary 3:</label>
                        <input type="text" class="form-control" id="itenary3" name="itenary3" value="<?php echo $row['itenary3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Itenary 4:</label>
                        <input type="text" class="form-control" id="itenary4" name="itenary4" value="<?php echo $row['itenary4']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="new_image">Choose New Image:</label>
                        <input type="file" class="form-control-file" id="new_image" name="new_image">
                    </div>
                    <div class="form-group">
                        <label for="new_second_image">Choose New Second Image:</label>
                        <input type="file" class="form-control-file" id="new_second_image" name="new_second_image">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload New Image</button>
                </form>
              </div>
            </div>
          </div>

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