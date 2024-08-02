<?php
require '../../../connection.php';
include '../../session.php';

// Handle form submission
// if (isset($_POST["submit"])) {
//     // Sanitize and validate inputs
//     $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
//     $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);
//     $itenary1 = filter_input(INPUT_POST, 'itenary1', FILTER_SANITIZE_STRING);
//     $itenary2 = filter_input(INPUT_POST, 'itenary2', FILTER_SANITIZE_STRING);
//     $itenary3 = filter_input(INPUT_POST, 'itenary3', FILTER_SANITIZE_STRING);
//     $itenary4 = filter_input(INPUT_POST, 'itenary4', FILTER_SANITIZE_STRING);

//     $validImageExtensions = ['jpg', 'jpeg', 'png'];
//     $maxFileSize = 1000000; // 1MB

//     // Handle image uploads
//     $errorMessages = [];
    
//     // Validate and process first image
//     if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
//         $filename = $_FILES["image"]["name"];
//         $filesize = $_FILES["image"]["size"];
//         $tmpName = $_FILES["image"]["tmp_name"];

//         $imageExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
//         if (!in_array($imageExtension, $validImageExtensions)) {
//             $errorMessages[] = 'Invalid first image extension';
//         } elseif ($filesize > $maxFileSize) {
//             $errorMessages[] = 'First image size is too large';
//         } else {
//             $newImageName = uniqid() . '.' . $imageExtension;
//             move_uploaded_file($tmpName, '../../img/' . $newImageName);
//         }
//     } else {
//         $errorMessages[] = 'First image does not exist or upload error';
//     }

//     // Validate and process second image
//     if (isset($_FILES["cover"]) && $_FILES["cover"]["error"] === UPLOAD_ERR_OK) {
//         $second_filename = $_FILES["cover"]["name"];
//         $second_filesize = $_FILES["cover"]["size"];
//         $second_tmpName = $_FILES["cover"]["tmp_name"];

//         $second_imageExtension = strtolower(pathinfo($second_filename, PATHINFO_EXTENSION));
//         if (!in_array($second_imageExtension, $validImageExtensions)) {
//             $errorMessages[] = 'Invalid second image extension';
//         } elseif ($second_filesize > $maxFileSize) {
//             $errorMessages[] = 'Second image size is too large';
//         } else {
//             $newSecondImageName = uniqid() . '.' . $second_imageExtension;
//             move_uploaded_file($second_tmpName, '../../img/' . $newSecondImageName);
//         }
//     } else {
//         $errorMessages[] = 'Second image does not exist or upload error';
//     }

//     if (empty($errorMessages)) {
//         // Prepare and execute the query
//         $query = "INSERT INTO home (name, image, cover, deskripsi, itenary1, itenary2, itenary3, itenary4) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//         if ($stmt = $conn->prepare($query)) {
//             $stmt->bind_param("ssssssss", $name, $newImageName, $newSecondImageName, $deskripsi, $itenary1, $itenary2, $itenary3, $itenary4);
//             $stmt->execute();

//             echo "<script>
//                 alert('Successfully added');
//                 window.location.href = 'paketHaji.php';
//             </script>";
//         } else {
//             echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
//         }
//     } else {
//         echo "<script>alert('" . implode(", ", $errorMessages) . "');</script>";
//     }
// }
// ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Badal Haji</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <div class="h-100">
                <?php include '../sidebarMenuGambar.php'; ?>
            </div>
        </aside>
        <div class="main">
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>List Gambar - Badal</h4>
                    </div>

                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">Paket Badal</h5>
                            <h6 class="card-subtitle text-muted">Dibawah ini adalah list gambar yang ada pada menu paket home</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $rows = $conn->query("SELECT * FROM badal ORDER BY id ASC");
                                    while ($row = $rows->fetch_assoc()) : ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo htmlspecialchars($row["nama"]); ?></td>
                                            <td><img src="../../img/<?php echo htmlspecialchars($row['cover']); ?>" width="200" alt="Image"></td>
                                            <td><?php echo htmlspecialchars($row["deskripsi"]); ?></td>
                                            <td><a href='editBadal.php?id=<?php echo $row['id']; ?>' class='btn btn-primary btn-sm'>Edit</a></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
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
                                <a href="#" class="text-muted"><strong>Umenk</strong></a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-muted">Contact</a></li>
                                <li class="list-inline-item"><a href="#" class="text-muted">About Us</a></li>
                                <li class="list-inline-item"><a href="#" class="text-muted">Terms</a></li>
                                <li class="list-inline-item"><a href="#" class="text-muted">Booking</a></li>
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
