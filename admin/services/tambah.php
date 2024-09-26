<?php
include '../../kon/koneksi.php';

if (isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $description_2 = mysqli_real_escape_string($conn, $_POST['description_2']);
    $target = "../../images/services/" . basename($image);

    // Upload gambar
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Simpan gambar dan deskripsi ke database
        $query = "INSERT INTO services (image_url, description, description_2) VALUES ('$image', '$description', '$description_2')";
        mysqli_query($conn, $query);
        header('Location: index.php');
    } else {
        echo "Gagal meng-upload gambar.";
    }
}

include "../layout/header-admin.php";
?>

<div class="container mt-4">
    <div class="card m-4">
        <div class="card-header text-center">
            <h5>Tambah Layanan</h5>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Layanan</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Layanan</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description_2" class="form-label">Deskripsi Kedua</label>
                    <textarea name="description_2" class="form-control" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <?php include "../layout/footer-admin.php"; ?>
</div>