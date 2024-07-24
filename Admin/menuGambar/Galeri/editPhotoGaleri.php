<?php
require '../../../connection.php';
include '../../session.php';

// Check if image ID is provided in URL parameter
if (isset($_GET['id'])) {
    $image_id = intval($_GET['id']); // Use intval to ensure ID is an integer

    // Fetch image details from the database
    $stmt = $conn->prepare("SELECT * FROM galeri WHERE id = ?");
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Image not found.";
        exit;
    }
} else {
    echo "ID parameter missing.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin - Edit Galeri</title>
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
        <?php include '../sidebarMenuGambar.php'; ?>
      </div>
    </aside>
    <div class="main">
      <!-- Content For Main -->
      <main class="content px-3 py-2">
        <div class="container-fluid">
          <div class="mb-3">
            <h4>Edit Photo Galeri</h4>
          </div>

          <!-- Table Element -->
          <div class="card border-0">
            <div class="card-header">
              <h5 class="card-title">Edit Data</h5>
              <h6 class="card-subtitle text-muted">Edit Data Galeri Foto Dibawah ini</h6>
            </div>
            <div class="card-body">
              <h2 class="mb-3">Edit Image</h2>
              <form action="updatePhotoGaleri.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                </div>
                <?php for ($i = 1; $i <= 7; $i++) : ?>
                  <div class="form-group">
                      <label for="image<?php echo $i; ?>">Current Image <?php echo $i; ?>:</label>
                      <br>
                      <img src="../../img/<?php echo htmlspecialchars($row["image$i"]); ?>" width="200" alt="">
                  </div>
                  <div class="form-group">
                      <label for="new_image<?php echo $i; ?>">Choose New Image <?php echo $i; ?>:</label>
                      <input type="file" class="form-control-file" id="new_image<?php echo $i; ?>" name="new_image<?php echo $i; ?>">
                  </div>
                <?php endfor; ?>
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
      <?php include '../footerAdmin.php'; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
