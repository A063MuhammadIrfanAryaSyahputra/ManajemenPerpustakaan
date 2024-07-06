<?php
require '../../../connection.php';
include '../../session.php';


if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $imageFiles = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7'];
  $imageNames = [];

  foreach ($imageFiles as $imageFile) {
    if ($_FILES[$imageFile]["error"] === 4) {
      echo "<script>alert('One or more images do not exist');</script>";
      exit;
    } else {
      $filename = $_FILES[$imageFile]["name"];
      $filesize = $_FILES[$imageFile]["size"];
      $tmpName = $_FILES[$imageFile]["tmp_name"];

      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $filename);
      $imageExtension = strtolower(end($imageExtension));

      if (!in_array($imageExtension, $validImageExtension)) {
        echo "<script>alert('Invalid image extension for $imageFile');</script>";
        exit;
      } elseif ($filesize > 1000000) {
        echo "<script>alert('Image size is too large for $imageFile');</script>";
        exit;
      } else {
        $newImageName = uniqid() . '.' . $imageExtension;
        move_uploaded_file($tmpName, '../../img/' . $newImageName);
        $imageNames[] = $newImageName;
      }
    }
  }

  $query = "INSERT INTO galeri (name, image1, image2, image3, image4, image5, image6, image7) 
              VALUES ('$name', '$imageNames[0]', '$imageNames[1]', '$imageNames[2]', 
                      '$imageNames[3]', '$imageNames[4]', '$imageNames[5]', '$imageNames[6]')";

  mysqli_query($conn, $query);
  echo "<script> 
            alert('Successfully added'); 
            document.location.href = 'photoGaleri.php';
          </script>";
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

        <!-- sidebar -->
        <?php include '../sidebarMenuGambar.php'; ?>

      </div>
    </aside>

    <div class="main">


      
      </main> 

      <!--Start List Gambar-->
      <main class="content px-3 py-2">
        <div class="container-fluid">
          <div class="mb-3">
            <h4>List Gambar - Photo Galeri</h4>
          </div>

          <!-- Table Element -->
          <div class="card border-0">
            <div class="card-header">
              <h5 class="card-title">Paket Haji</h5>
              <h6 class="card-subtitle text-muted">Dibawah ini adalah list gambar yang ada galeri</h6>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>#</td>
                  <td>Name</td>
                  <td>Image 1</td>
                  <td>Image 2</td>
                  <td>Image 3</td>
                  <td>Image 4</td>
                  <td>Image 5</td>
                  <td>Image 6</td>
                  <td>Image 7</td>
                  <td>Action</td>
                </tr>
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id ASC"); ?>
                <?php foreach ($rows as $row) : ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><img src="../../img/<?php echo $row['image1']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image2']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image3']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image4']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image5']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image6']; ?>" width="100" alt=""></td>
                    <td><img src="../../img/<?php echo $row['image7']; ?>" width="100" alt=""></td>
                    <td><a href='editPhotoGaleri.php?id=<?php echo $row['id']; ?>' class='btn btn-primary btn-sm mr-1'>Edit</a></td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
      </main>
      <!--End List Gambar-->

      <a href="#" class="theme-toggle">
        <i class="fa-regular fa-moon"></i>
        <i class="fa-regular fa-sun"></i>
      </a>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>