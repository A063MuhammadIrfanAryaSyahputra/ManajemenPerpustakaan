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

<!--IRFAN-->

<body>
<?php include 'session.php'; ?>

  <div class="wrapper">
    <aside id="sidebar" class="js-sidebar">
      <!-- Content For Sidebar -->
      <div class="h-100">

        <!-- include script buat sidebar -->
        <?php include 'sidebar.php'; ?>

      </div>
    </aside>
    <div class="main">

      <?php include 'sidebar_profile.php'; ?>

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