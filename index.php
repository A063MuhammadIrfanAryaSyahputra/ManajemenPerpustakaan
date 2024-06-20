<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Admin/css/style.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar" class="js-sidebar">
        <!-- Content For Sidebar -->
        <div class="h-100">
          <div class="sidebar-logo">
            <a href="Main/Umroh.php">Amansa Travel</a>
          </div>
          <!-- <ul class="sidebar-nav">
            <li class="sidebar-header">Admin Elements</li>
            <li class="sidebar-item">
              <a href="index.php" class="sidebar-link">
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
                  <a href="Admin/menuGambar/paketUmroh/paketUmroh.php" class="sidebar-link">Paket Umroh</a>
                </li>
                <li class="sidebar-item">
                  <a href="Admin/menuGambar/paketHaji/paketHaji.php" class="sidebar-link">Paket Haji</a>
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
                  <a href="Admin/loginPage" class="sidebar-link">Login</a>
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
          <?php include 'sidebar.php'; ?>

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
              <h4>Admin Dashboard</h4>
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
                    <strong></strong>
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