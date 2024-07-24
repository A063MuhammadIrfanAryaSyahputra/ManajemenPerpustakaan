<?php
require '../../../connection.php';
include '../../session.php';

// Check if image ID is provided in URL parameter and validate it
$image_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($image_id) {
    // Fetch image details from the database
    $sql = "SELECT * FROM badal WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $image_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No record found.";
            exit;
        }
    } else {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }
} else {
    echo "Invalid ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Edit Badal</title>
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
            <!-- content here -->
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
                            <form action="updateBadal.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['nama']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="image">Current Image:</label>
                                    <br>
                                    <img src="../../img/<?php echo htmlspecialchars($row['image']); ?>" width="200" alt="Current Image">
                                </div>
                                <div class="form-group">
                                    <label for="second_image">Current Second Image:</label>
                                    <br>
                                    <img src="../../img/<?php echo htmlspecialchars($row['cover']); ?>" width="200" alt="Current Second Image">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi:</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo htmlspecialchars($row['deskripsi']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="new_image">Choose New Image:</label>
                                    <input type="file" class="form-control-file" id="new_image" name="new_image" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="new_second_image">Choose New Second Image:</label>
                                    <input type="file" class="form-control-file" id="new_second_image" name="new_second_image" accept="image/*">
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
            <?php include '../footerAdmin.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
