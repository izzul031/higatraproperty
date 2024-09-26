<?php
include '../../kon/koneksi.php';

$query = "SELECT * FROM us_section2";
$result = mysqli_query($conn, $query);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM us_section2 WHERE id = $id");
    header('Location: index.php');
}
?>

<?php include "../layout/header-admin.php";
?>
<div class="card m-4">
    <div class="card-header text-center">
        <h5>Tabel Harga</h5>
    </div>
    <div class="card-body">
        <a href="tambah.php" class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-plus"></i> Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Harga</th>
                        <th>Fasilitas</th>
                        <th>Nomor WhatsApp</th>
                        <th>Pesan Otomatis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr class="align-middle">
                            <td><?= $no++; ?></td>
                            <td><?= $row['type']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['fasilitas']; ?></td>
                            <td><?= $row['nomor_whatsapp']; ?></td>
                            <td><?= $row['pesan_otomatis']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-pen"></i></a>
                                <a href="?delete=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "../layout/footer-admin.php";
?>